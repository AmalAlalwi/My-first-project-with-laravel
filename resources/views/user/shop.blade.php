
@extends('user.layout.master')
@section('title','shop')

@section('main_content')

<form method="POST" action="{{route('filter')}}">
    @csrf
      @method('POST')

      <div class="filter">

        <div class="dropdown item_1">

          <label class="btn btn-dark dropdown-toggle" for="size" data-bs-toggle="dropdown" aria-expanded="false">
            اختر حسب الحجم
          </label>
          <select class="dropdown-menu " name="size" id="size">
            <option value="كبير">كبير</option>
            <option value="متوسط">متوسط</option>
            <option value="صغير">صغير</option>
          </select>
          </div>

        <div class="dropdown item_1">
          <label class="btn btn-dark dropdown-toggle" for="color" data-bs-toggle="dropdown" aria-expanded="false">
            اختر حسب الون
          </label>
          <select class="dropdown-menu " name="color" id="color">
            <option value="أبيض">أبيض</option>
            <option value="فضي">فضي</option>
            <option value="ذهبي">ذهبي</option>
          </select>
          </div>

        <div class="dropdown item_1">
          <label class="btn btn-dark dropdown-toggle" for="price" data-bs-toggle="dropdown" aria-expanded="false">
       اختر حسب السعر
          </label>
          <ul class="dropdown-menu">
            <label for="min-price">السعر الأدنى:</label>
            <input type="number"  pid="min-price" name="min-price" min="0">

            <label for="max-price">السعر الأعلى:</label>
            <input type="number" id="max-price" name="max-price" min="0">


          </ul>
          </div>
          <button class="btn1 btn-dark dropdown" type="submit">فلترة</button>
        <div class="item_1"><img src="images/filter-solid (5).svg" alt=""></div>


      </div>
  </form>

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
