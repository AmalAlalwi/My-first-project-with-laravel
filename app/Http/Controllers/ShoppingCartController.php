<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\region;
use App\Models\product_cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\shopping_cart;
class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      //
      public function store_cart($id)
      {
        $user=Auth::user();

        $product1=product::where('id',$id)->first();
        $product = new product_cart();
        $user_cart=shopping_cart::where('user_id',$user->id)->get();
        if(!$user_cart->isEmpty()){
          $product->product_id=$id;
          $product->shopping_cart_id=$user_cart[0]->id;
          $product->quantity='1';
          $product->price1=$product1->price;
          $product->all_price='0';
          $product->save();
        }
        else{
          $newuser=new shopping_cart();
          $newuser->user_id=$user->id;
          $newuser->save();
          $product->product_id=$id;
          $product->shopping_cart_id=$newuser->id;
          $product->quantity='1';
          $product->price1=$product1->price;
          $product->all_price='0';
          $product->save();
        }
        return back();
      }
    public function index()
    {//
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
     * @param  \App\Models\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function edit(shopping_cart $shopping_cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shopping_cart $shopping_cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(shopping_cart $shopping_cart)
    {
        //
    }
}
