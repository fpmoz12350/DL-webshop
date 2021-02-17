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

    public function show($id){
        $order = Order::findOrFail($id);
        $order_products = $order->orderItems();

        return view('admin.webshop.orders.show', compact(['order', 'order_products']));
    }

    public function destroy($id){
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders-index');
    }

    public function toggleDeliver(Request $request, $orderId)
    {
        $order = Order::find($orderId);

        if($request->has('delivered')){
            $order->delivered=$request->delivered;
        }else{
            $order->delivered="0";
        }
        
        $order->save();

        return back();
    }
    
}
