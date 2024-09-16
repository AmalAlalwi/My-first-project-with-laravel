
  @extends('admin.layout.master')
		@section('title','insert')
		@section('main')






<div id="product">
    <div class="container">
        <div class="row my-5 mx-2">
            <form class="row g-3 needs-validation" method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">الاسم</label>
                    <input type="text" class="form-control" value="{{$product->product_name}}" id="product-name" name="name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
            <br>
                <div class="col-md-4 col-12">
                    <label for="product-price" class="form-label">السعر</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">ل.س</span>
                    <input type="text" class="form-control" value="{{$product->price}}"  id="product-price" name="price" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a price.
                    </div>
                    </div>
                </div>
                <br>
                <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">الحجم</label>
                    <input type="text" class="form-control" value="{{$product->size}}" id="product-name" name="size" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>

                <br>
                 <div class="col-md-4 col-12">
                    <label for="product-price" class="form-label">عدد القطع</label>
                    <div class="input-group has-validation">

                    <input type="text" class="form-control" value="{{$product->product_count}}"  id="product-price" name="number" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a price.
                    </div>
                    </div>
                </div>
                 <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">اللون</label>
                    <input type="text" class="form-control" value="{{$product->color}}"  id="product-name" name="color" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                 <div class="col-md-4 col-12">
                    <label for="product-price" class="form-label">الصنف</label>
                    <select name="cat" id="" class="form-select">
                        <option value="1">المفروشات</option>
                        <option value="2">الأدوات الكهربائية</option>
                        <option value="3">أدوات المطبخ</option>
                    </select>
                </div>
                <br>
                <div class="col-md-8 col-12">
                     <label for="product-price" class="form-label">الصورة</label>
                    <input type="file" class="form-control" value="{{$product->img}}"  name="image" aria-label="file example" required>
                    <div class="invalid-feedback">invalid form image </div>
                </div>

                <div class="col-md-4 col-12">
                     <label for="product-price" class="form-label">الشركة</label>
                     <select name="brand" id="" class="form-select">
                        <option value="1">الشركة السورية للمفروشات</option>
                        <option value="2">Cat 2</option>
                        <option value="2">Cat 3</option>
                    </select>
                    <br> <br>
                    <div class="col-md-4 col-12">

                   {{-- <select name="category_id" id="" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>--}}
                    <div class="invalid-feedback">select category</div>
                </div>

                <div class="col-12">

                    <button class="btn btn-primary" type="submit">save</button>
                    <br>

                </div>
            </form>
            {{-- show validation errors --}}
            <section class="mt-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </section>
        </div>
    </div>
</div>

@endsection
