@extends('admin.layout.master')
		@section('title','insert')
		@section('main')
<div id="product">
    <div class="container">
        <div class="row my-5 mx-2">
            <form class="row g-3 needs-validation" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data" novalidate>
                @csrf
                @method('POST')
                <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="product-name" name="name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
            <br>
                <div class="col-md-4 col-12">
                    <label for="product-price" class="form-label">السعر</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">ل.س</span>
                    <input type="text" class="form-control" id="product-price" name="price" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a price.
                    </div>
                    </div>
                </div>
                <br>
                <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">الحجم</label>
                    <input type="text" class="form-control" id="product-name" name="size" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>

                <br>
                 <div class="col-md-4 col-12">
                    <label for="product-price" class="form-label">عدد القطع</label>
                    <div class="input-group has-validation">

                    <input type="text" class="form-control" id="product-price" name="number" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a price.
                    </div>
                    </div>
                </div>
                 <div class="col-md-8 col-12">
                    <label for="product-name" class="form-label">اللون</label>
                    <input type="text" class="form-control" id="product-name" name="color" required>
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
                    <input type="file" class="form-control" name="image" aria-label="file example" required>
                    <div class="invalid-feedback">invalid form image </div>
                </div>

                <div class="col-md-4 col-12">
                     <label for="product-price" class="form-label">الشركة</label>
                     <select name="brand" id="" class="form-select">
                        <option value="1">الشركة السورية للمفروشات</option>
                        <option value="2">LG</option>
                        <option value="3">المطبخ السوري</option>
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

                    <button class="btn btn-secondary" type="submit">Add</button>
                    <br>
                    <a class="btn btn-secondary" href="{{route('product.index')}}" type="button">Back</a>
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
{{--btn btn-secondary--}}
