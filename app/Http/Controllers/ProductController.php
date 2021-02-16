<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('admin.webshop.products.index', compact(['products']));
    }

    public function create()
    {
        $product = new Product;
        $categories = Category::all();

        return view('admin.webshop.products.create', compact(['categories']));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data = $this->setPublishedAttribute($data);

        $product = Product::create($data);

        return redirect()->route('products-index');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.webshop.products.show', compact(['product']));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        
        return view('admin.webshop.products.edit', compact(['product', 'categories']));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        $data = $this->setPublishedAttribute($data);
        
        $product->update($data);

        return redirect()->route('products-index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products-index');
    }
}
