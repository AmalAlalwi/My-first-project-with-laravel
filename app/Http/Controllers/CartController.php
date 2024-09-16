<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\product_cart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\shopping_cart;
class CartController extends Controller
{
    //

    public function show()
    {

        $product=product_cart::all();
        $max=[];
        $min=[];
        foreach($product as $p){
            $pro=product::where('id',$p->product_id)->first();

            if(product::find($p->product_id)){

                array_push($max,$pro);
            }
        }
        $pro=product::all();
        foreach($pro as $p){

            if(in_array($p,$max)){
            continue;
            }
            else {
            array_push($min,$p);
            }
        }
        $user=User::all();
        $num=count($user);

        return view('admin.statistic',compact('max','num','min'));

    }
}
