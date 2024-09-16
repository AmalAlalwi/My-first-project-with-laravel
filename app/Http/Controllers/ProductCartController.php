<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\product_cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\shopping_cart;
class ProductCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('user.cart');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //

     $product=product::all();
     return view('user.cart',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     /* $user=Auth::user();
     $product1=product::find($request->id)->get();
      $product = new product_cart();
      $user_cart=shopping_cart::find($user->id)->get();
      if($user_cart){
        $product->product_id=$id;
        $product->shopping_cart_id=$user_cart->id;
        $product->quantity='1';
        $product->price1=$product1->price;
        $product->save();
      }
      else{
        $newuser=new shopping_cart();
        $newuser->user_id=$user->id;
        $newuser->save();
        $product->product_id=$id;
        $product->shopping_cart_id=$newuser->id;
        $product->quantity='1';
        $product->price1=$request->price;
        $product->save();
      }*/
    }

    




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $product=product_cart::orderBy('quantity','asc')->first();
        $product_n=product::find($product->product_id);
        $user=User::all();
        $num=count($user);

        return view('admin.statistic',compact('product_n','num'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function edit(product_cart $product_cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_cart $product_cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product_cart  $product_cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_cart $product_cart)
    {
        //
    }
    public function showStatistic1()
    {


    }
}
