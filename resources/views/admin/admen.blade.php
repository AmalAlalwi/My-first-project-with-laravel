@extends('admin.layout.master')
@section('title', 'admin')
@section('main')
    <div id="products">
        <div class="container">
            <div class="row justify-content-center">

                <div class="row my-5 mx-2">
                    <div class="col-12">
                        <table class="table table-striped table-hover table-responsive text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">الاسم</th>

                                    <th scope="col">السعر</th>
                                    {{-- <th scope="col">Category</th> --}}
                                    <th scope="col">التعديلات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td scope="col">{{ $key + 1 }}</td>
                                        <td scope="col">
                                            @if ($product->img)
                                                <img src="{{ asset('images/products/' . $product->img) }}" width="100"
                                                    height="100" alt="product image">
                                            @else
                                                <img src="{{ asset('images/nike.png') }}" width="100" height="100"
                                                    alt="product image">
                                            @endif
                                        </td>
                                        <td scope="col">{{ $product->product_name }}</td>
                                        <td scope="col">{{ $product->price }}</td>
                                        <td scope="col">
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-outline-warning mx-1"><i class="fa fa-cogs"></i></a>
                                            <form class="d-inline-block"
                                                action="{{ route('product.destroy', $product->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{--  @empty
                <tr>
                    <td colspan="6" class="text-center">
                        <i>No products yet!</i>
                    </td>
                </tr>*/ --}}
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
