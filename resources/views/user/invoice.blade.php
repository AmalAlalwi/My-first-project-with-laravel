@extends('user.layout.master')
@section('title', 'invoice')

@section('main_content')
    <div class="hero">
        <div class="container">
            <div class="col-md-6 pl-5">
                <div class="row justify-content">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercaseل">الفاتورة</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">سعر المنتجات</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$sum}}</strong>S.P
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">تكلفة الشحن</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$shipping}}</strong>S.P
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">السعر الكلي</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$all}}</strong>S.P
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">مدة التوصيل</span>
                            </div>
                            <div class="col-md-6 text-right">
                               يوم <strong class="text-black">{{$delevery}}</strong>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('sendmail') }}" method="POST">
                                <button type="submit" class="btn btn-black btn-lg py-3 btn-block"
                                    onclick="alert('تم إرسال رقم الدفع الخاص بالفاتورة إلى بريدك الالكتروني')"
                                    onclick="alert('الكمية المطلوبة غير متوفرة') ">إرسال الطلب</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
