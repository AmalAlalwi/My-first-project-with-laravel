<?php

namespace App\Http\Controllers;
use App\Models\invoic;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\region;
use App\Models\product_cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\shopping_cart;


class InvoicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $user_cart=shopping_cart::where('user_id',$user->id)->first();
        $product_cart=product_cart::where('shopping_cart_id',$user_cart->id)->get();
        $sum=product_cart::where('shopping_cart_id',$user_cart->id)->where('all_price','0')->sum('price1');
        $sum_product=product_cart::where('shopping_cart_id',$user_cart->id)->sum('product_id');
        $region=region::where('name',$user->region)->first();
        $shipping=$region->shipping_cost;
        $delevery=$region->deliveru_duration;
        $all=$sum+$shipping;
        $invoice=new invoic();
        $invoice->user_id=$user->id;
        $invoice->shopping_cart_id=$user_cart->id;
        $invoice->region_id=$region->id;
        $invoice->save();
        foreach($product_cart as $p){
            $product=product::where('id',$p->product_id)->first();
            if($product->array_product_count>'0'){
            $product->product_count-='1';
            $product->save();
            $p->all_price='1';
            $p->save();

        }}
        return view('user.invoice',compact('sum','shipping','all','delevery'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\invoic  $invoic
     * @return \Illuminate\Http\Response
     */
    public function show(invoic $invoic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoic  $invoic
     * @return \Illuminate\Http\Response
     */
    public function edit(invoic $invoic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoic  $invoic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoic $invoic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoic  $invoic
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoic $invoic)
    {
        //
    }
}
