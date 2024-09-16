@extends('admin.layout.master')
		@section('title','products')
		@section('main')
    <center>
        <main>
          <br>
            <div class="all-pro">
                <div class="card" style="width: 15rem;">
                   <center>
                    <img src="images/cartt.jpg" class="prod-img" >
                   </center>
                    <div class="card-body">
                      <h5 class="card-titles">اسم المنتج</h5>
                      <p class="card-texts">سعر المنتج</p>
                     <a href="#" class="btn-btn-danger">حذف منتج</a>
                     <a class="update" href="update.html" class="btn-btn-primary">تعديل منتج</a>
                    </div>
                      </div>
                      <div class="card" style="width: 15rem;">
                        <center>
                        <img src="" class="prod-img" >
                        </center>
                        <div class="card-body">
                          <h5 class="card-title">اسم المنتج</h5>
                          <p class="card-text">سعر المنتج</p>
                         <a href="#" class="btn-btn-danger">حذف منتج</a>
                         <a class="update" href="update.html" class="btn-btn-primary">تعديل منتج</a>
                        </div>
                          </div>
                          <div class="all-pro">
                            <div class="card" style="width: 15rem;">
                              <center>
                                <img src="" class="prod-img" >
                              </center>
                                <div class="card-body">
                                  <h5 class="card-title">اسم المنتج</h5>
                                  <p class="card-text">سعر المنتج</p>
                                 <a href="#" class="btn-btn-danger">حذف منتج</a>
                                 <a class="update" href="update.html" class="btn-btn-primary">تعديل منتج</a>
                                </div>
                            </div>
            </div>
            </main>
        <center >
            
@endsection