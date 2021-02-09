<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent = null;
        if(session()->has('category')){
            $parent = session()->get('category');
            $categories = Category::where('parent_id', $parent->id)->withDepth()->defaultOrder()->get();

            session()->forget('category');
        }
        else{
            $categories = Category::withDepth()->defaultOrder()->get();
        }
        //dd($categories);

        return view('admin.webshop.categories.index', compact(['categories']))
        ->with('parent', $parent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = new Category;
        $categories = Category::withDepth()->defaultOrder()->get();

        return view('admin.webshop.categories.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data = $this->setPublishedAttribute($data);

        $parent_id = Arr::pull($data, 'parent_id');

        if(!$parent_id){
            Category::create($data);
        }
        else{
            $parent = Category::findOrFail($parent_id);
            Category::create($data, $parent);
        }


        return redirect()->route('categories-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.webshop.categories.show', compact(['category']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::withDepth()->defaultOrder()->get();

        return view('admin.webshop.categories.edit', compact(['category', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->all();
        $data = $this->setPublishedAttribute($data);

        $parent_id = Arr::pull($data, 'parent_id');
        $category->update($data);

        if(!$parent_id){
            $category->saveAsRoot();
        }
        else{
            $parent = Category::findOrFail($parent_id);
            $category->appendToNode($parent)->save();
        }

        return redirect()->route('category-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories-index');
    }

    public function filter(Category $category)
    {
        session(['category' => $category]);

        return redirect()->route('categories-index');
    }

    public function reorder(Request $request)
    {
        $category = Category::withDepth()->findOrFail($request->thisId);
        $categoryIds = $request->categories;
        $key = array_search($category->id, $categoryIds);
        $next = $this->getNextVal($categoryIds, $category->id);
        $prev = $this->getPrevVal($categoryIds, $category->id);
        $prevCategory = Category::withDepth()->findOrFail($prev);
        $nextCategory = Category::withDepth()->findOrFail($next);
        $roots = Category::whereIsRoot()->Arr::pluck('id');

        if($category->id == $categoryIds[0]){
            //$category->makeRoot()->save();
            $firstRoot = Category::findOrFail($roots[0]);
            $category->beforeNode($firstRoot)->save();

            return 'success!';
        }
        else{
            if($prevCategory->depth == $nextCategory->depth){
                $category->afterNode($prevCategory)->save();

                return 'success!';
            }

            if($prevCategory->depth < $nextCategory->depth){
                $category->prependToNode($prevCategory)->save();

                return 'success!';
            }
        }
        
        //$category->down();

        //return redirect()->route('admin.webshop.categories.index');
        //return [$prevCategory->depth, $category->depth, $nextCategory->depth];
        //return $firstRoot->id;
        return 'error';
    }

    
    private function getNextVal(&$array, $curr_val)
    {
        $next = 0;
        reset($array);

        do
        {
            $tmp_val = current($array);
            $res = next($array);
        } while ( ($tmp_val != $curr_val) && $res );

        if( $res )
        {
            $next = current($array);
        }

        return $next;
    }

    private function getPrevVal(&$array, $curr_val)
    {
        end($array);
        $prev = current($array);

        do
        {
            $tmp_val = current($array);
            $res = prev($array);
        } while ( ($tmp_val != $curr_val) && $res );

        if( $res )
        {
            $prev = current($array);
        }

        return $prev;
    }
}
