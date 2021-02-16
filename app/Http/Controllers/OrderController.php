<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();

        return view('admin.webshop.orders.index', compact(['orders']));
    }

    public function create(){
        $order = new Order;
        $products = Product::all();

        return view('admin.webshop.orders.create', compact(['products']));
    }

    public function store(OrderRequest $request)
    {
        $product = Product::findOrFail(1);
        $data = $request->only(['qty']);
        $data['user_id'] = auth()->user()->id;
        $data['price'] = $product->price;
        $data['total'] = $data['qty'] * $data['price'];

        $order = Order::create($data);

        return redirect()->route('orders-index');
    }

    public function show($id){
        $order = Order::findOrFail($id);

        return view('admin.webshop.orders.show', compact(['order']));
    }

    public function edit($id){
        $order = Order::findOrFail($id);
        $products = Product::all();
        $order_products = $order->products->pluck('id')->toArray();

        return view('admin.webshop.orders.edit', compact(['order', 'products', 'order_products']));
    }

    public function update(OrderRequest $request, $id){
        $order = Order::findOrFail($id);
        $orders = Order::all();
        $data = $request->all();

        $product = Product::findOrFail(1);
        $data = $request->only(['qty', 'delivered']);
        $data = $this->setDeliveredAttribute($data);
        $data['user_id'] = auth()->user()->id;
        $data['price'] = $product->price;
        $data['total'] = $data['qty'] * $data['price'];

        $order->update($data);

        return redirect()->route('orders-index');
    }

    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders-index');
    }
    
}
