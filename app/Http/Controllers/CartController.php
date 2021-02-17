<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function addItem(Request $request, $id)
    {
        $product=Product::find($id);
        $qty = $request->qty;

        Cart::add($id,$product->name,$qty,$product->price,10,['size'=>'medium']);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd(Cart::content());
        //d($request->all());
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);

        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}