@extends('admin.layout.master')
@section('title', 'statistic')
@section('main')
    <div id="products">
        <div class="container">
            <div class="container border-radius-lg">
                <div class="row">
                    <div class="col-3 py-3 ps-0">
                        <div class="d-flex mb-2">
                            <div
                                class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>document</title>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                            fill-rule="nonzero">
                                            <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(154.000000, 300.000000)">
                                                    <path class="color-background"
                                                        d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                        opacity="0.603585379"></path>
                                                    <path class="color-background"
                                                        d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <p class="text-xs mt-1 mb-0 font-weight-bold">عدد المسجلين في الموقع</p>
                        </div>
                        <h4 class="font-weight-bolder">{{ $num }}</h4>
                        <div class="progress w-75">
                            <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-5 mx-2">
                <div class="col-12">
                    <table class="table table-striped table-hover table-responsive text-center">
                        <thead>
                            <tr>

                                <th scope="col">المنتجات الأكثر مبيعاً</th>
                            </tr>
                        </thead>
                        <tbody>
                            <table class="table table-striped table-hover table-responsive text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">الاسم</th>

                                        <th scope="col">السعر</th>
                                        {{-- <th scope="col">Category</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($max as $key => $product)
                                        <tr>
                                            <td scope="col">{{ $key + 1 }}</td>
                                            <td scope="col">
                                                @if ($product->img)
                                                    <img src="{{ asset('images/products/' . $product->img) }}"
                                                        width="100" height="100" alt="product image">
                                                @else
                                                    <img src="{{ asset('images/nike.png') }}" width="100" height="100"
                                                        alt="product image">
                                                @endif
                                            </td>
                                            <td scope="col">{{ $product->product_name }}</td>
                                            <td scope="col">{{ $product->price }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row my-5 mx-2">
                <div class="col-12">
                    <table class="table table-striped table-hover table-responsive text-center">
                        <thead>
                            <tr>

                                <th scope="col">المنتجات الأقل مبيعاً</th>
                            </tr>
                        </thead>
                        <tbody>
                            <table class="table table-striped table-hover table-responsive text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">الاسم</th>

                                        <th scope="col">السعر</th>
                                        {{-- <th scope="col">Category</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($min as $key => $product)
                                        <tr>
                                            <td scope="col">{{ $key + 1 }}</td>
                                            <td scope="col">
                                                @if ($product->img)
                                                    <img src="{{ asset('images/products/' . $product->img) }}"
                                                        width="100" height="100" alt="product image">
                                                @else
                                                    <img src="{{ asset('images/nike.png') }}" width="100" height="100"
                                                        alt="product image">
                                                @endif
                                            </td>
                                            <td scope="col">{{ $product->product_name }}</td>
                                            <td scope="col">{{ $product->price }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
