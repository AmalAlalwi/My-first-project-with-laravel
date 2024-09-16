@extends('user.layout.master')
@section('title', 'cart')

@section('main_content')

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Shopping Cart</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('images/img_3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">الصورة</th>
                                    <th class="product-name">المنتج</th>
                                    <th class="product-price">السعر</th>
                                    <th class="product-remove">حذف المنتج</th>
                                    <th class="product-remove">تأكيد المنتج</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            @if ($product->img)
                                                <img src="{{ asset('images/products/' . $product->img) }}" width="100"
                                                    height="100" alt="product image">
                                            @else
                                                <img src="{{ asset('images/nike.png') }}" width="100" height="100"
                                                    alt="product image">
                                            @endif
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $product->product_name }}</h2>
                                        </td>
                                        <td>{{ $product->price }}</td>
                                        {{-- <td>
                                     <div class="input-group mb-3 d-flex align-items-center quantity-container"
                                            style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-black decrease"
                                                    type="button">&minus;</button>
                                            </div>
                                            <input type="number" min="1" name="quantity" class="form-control text-center quantity-amount"
                                                value="1" placeholder="" aria-label="Example text with button addon"
                                                aria-describedby="button-addon1" >
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-black increase"
                                                    type="button">&plus;</button>
                                            </div>
                                        </div>
                                    </td> --}}
                                        <td><a href="{{ route('productCart.store') }}" class="btn btn-black btn-sm">X</a>
                                        </td>
                                        <td>

                                            <a type="button" href="{{ route('store', $product->id) }}" type="submit"
                                                class="btn btn-black btn-sm">+</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <a href="{{route('invoice')}}"><button class="btn btn-black btn-sm btn-block">الفاتورة</button></a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('product.show', '4') }}"> <button
                                    class="btn btn-outline-black btn-sm btn-block">اكمل التسوق</button></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">


                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">

                </div>
            </div>
        </div>
    </div>





@endsection
