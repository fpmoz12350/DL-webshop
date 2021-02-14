<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use App\Models\Category;
use App\Models\Comment;
use Cart;
use Auth;

class ShopController extends Controller
{
    use PasswordValidationRules;

    public function index()
    {
        $selectedCategory = null;

        if(session()->has('categories')){
            if(is_array(session('categories'))){
                $products = Product::whereIn('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            else{
                $products = Product::where('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            $selectedCategory = session('selectedCategory');
        }
        else
            $products = Product::where('published', 1)->paginate(10);

        
        $descendants = [];

        if($selectedCategory){
            $y = $selectedCategory->descendants()->get();
            foreach($y as $d){
                $descendants[] = $d->name;
            }
        }

        return view('webshop.index')
        ->with('categories', Category::withDepth()->defaultOrder()->get())
        ->with('products', $products)
        ->with('selectedCategory', $selectedCategory)
        ->with('descendants', implode(', ', $descendants));
    }

    public function category($id)
    {
        /* $category = Category::findOrFail($id);
        //dd($category->isRoot());
        session(['selectedCategory' => $category]);
        if($category->isRoot()){
            session(['categories' => $category->descendants()->pluck('id')->toArray()]);
        }
        else{
            session(['categories' => $id]);
        } */

        $rezultat = Product::query()
        ->where('category_id', 'LIKE', "%{$id}%")
        ->get();

        $selectedCategory = null;

        if(session()->has('categories')){
            if(is_array(session('categories'))){
                $products = Product::whereIn('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            else{
                $products = Product::where('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            $selectedCategory = session('selectedCategory');
        }
        else
            $products = Product::where('published', 1)->paginate(10);

        
        $descendants = [];

        if($selectedCategory){
            $y = $selectedCategory->descendants()->get();
            foreach($y as $d){
                $descendants[] = $d->name;
            }
        }

        return view('webshop.index')
        ->with('rezultat', $rezultat)
        ->with('categories', Category::withDepth()->defaultOrder()->get())
        ->with('products', $products)
        ->with('selectedCategory', $selectedCategory)
        ->with('descendants', implode(', ', $descendants));
}

    public function noCategory()
    {
        session()->forget('categories');
        session()->forget('selectedCategory');

        return redirect()->route('shop');
    }

    public function product(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $comments = $product->comments;

        return view('webshop.product', compact('product', 'comments'));
    }

    public function productComment($product_id, Request $request)
    {
        $data = $request->all();
        $data["user_id"] = auth()->user()->id;
        $data["product_id"] = $product_id;

        $comment = Comment::create($data);

        return redirect()->route('product', $product_id);
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);

        return view('webshop.profile', compact('user'));
    }

    public function showCart()
    {
        $subtotal = str_replace(',', '', Cart::subtotal());
        $tax_percent = config('cart.tax');
        $tax = ($subtotal * $tax_percent) / 100;
        $user = Auth::user();
        $datum = date('d.m.Y H:i:s');

        return view('webshop.cart')
        ->with('cartItems', Cart::content())
        ->with('subtotal', $subtotal)
        ->with('tax_percent', $tax_percent)
        ->with('tax', $tax)
        ->with('total', $subtotal + $tax)
        ->with('user', $user)
        ->with('datum', $datum);
    }
   
    public function addToCart(){
        session()->forget('categories');
        session()->forget('selectedCategory');

        $product = Product::findOrFail(request()->product_id);
        if($product->published){
            $quantity = request()->quantity;
            Cart::add($product->id, $product->name, $quantity, $product->price, 0);

            return __('web_shop.add_to_cart_success', ['product_name' => $product->name, 'quantity' => $quantity]);
        }
        
        return redirect()->route('webshop.product');
    }

    public function cartCounter()
    {
        return Cart::count();
    } 

    public function profileUpdate(UserRequest $request, User $user)
    {
        $data = $request->all();
        Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'password' => $this->passwordRules()
        ])->validate();

        $data["password"] = Hash::make($data["password"]);
        
        $data['user_id'] = auth()->user()->id;

        $user->update($data);

        $kupac = Role::find(1);
        $user->attachRole($kupac);

        return redirect()->route('profile', $user->id);
    } 


    public function search(Request $request)
    {
        $word = $request->input('word');

        $rezultat = Product::query()
        ->where('name', 'LIKE', "%{$word}%")
        ->get();

        $selectedCategory = null;

        if(session()->has('categories')){
            if(is_array(session('categories'))){
                $products = Product::whereIn('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            else{
                $products = Product::where('category_id', session('categories'))->where('published', 1)->paginate(10);
            }
            $selectedCategory = session('selectedCategory');
        }
        else
            $products = Product::where('published', 1)->paginate(10);

        
        $descendants = [];

        if($selectedCategory){
            $y = $selectedCategory->descendants()->get();
            foreach($y as $d){
                $descendants[] = $d->name;
            }
        }

        return view('webshop.index')
        ->with('rezultat', $rezultat)
        ->with('categories', Category::withDepth()->defaultOrder()->get())
        ->with('products', $products)
        ->with('selectedCategory', $selectedCategory)
        ->with('descendants', implode(', ', $descendants));
    }
}
