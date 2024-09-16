
@extends('user.layout.master')
@section('title','shop')

@section('main_content')
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

              <!-- Start Column 1 -->
            @foreach($product as $product)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="{{route('cart')}}">
                    <img src="{{asset('images/products/'.$product->img)}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{$product->product_name}}</h3>
                    <strong class="product-price">{{$product->price}}S.P</strong>

                    <span class="icon-cross">
                        <img src="{{asset('images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            @endforeach
            <!-- End Column 1 -->

          </div>
    </div>
</div>
<!-- Start Footer Section -->



@endsection
