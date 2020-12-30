<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id', 'desc');

        return view('admin.webshop.products.index', compact(['products']));
    }

    public function create()
    {
        $product = new Product;

        return view('admin.webshop.products.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
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
        
        return view('admin.webshop.products.edit', compact(['product']));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        
        $product->update($data);

        return redirect()->route('products-index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products-index');
    }
}
