
@extends('user.layout.master')
@section('title', 'index')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('تم تسجيل الدخول بنجاح') }}
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">

                        <h1>Modern & Elegant<span clsas="d-block"> Home Design</span></h1>
                        <p><a href="{{route('product.show','4')}}" class="btn btn-secondary me-2">تسوق الآن</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/img_2.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">لماذا اخترت متجرنا؟</h2>
                    <p>متجر المنزل الحديث يقدم لك افضل المنتجات بأسعار مميزة وبتنسيق أنيق و عصري</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('images/truck.svg')}}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>شحن مجاني &amp;سريع</h3>
                                <p>يوفر متجرنا شحن مجاني ضمن محافظة حلب وبوقت سريع</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>سهولة التسوق</h3>
                                <p>يمكن إضافة المنتج إلى السلة بالكمية المطلوب والمتوفرة ضمن المتجر</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('images/support.svg')}}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>منتجات لشركات متعددة</h3>
                                <p>يتعامل متجر المنزل العصري مع شركات متنوعة وذات جودة عالية </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('images/return.svg')}}" alt="Image" class="imf-fluid">
                                </div>
                                <h3> إمكانية حفظ السلة </h3>
                                <p> يمكن للمستخدم حفظ السلة للدفع لاحقاً </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{asset('images/why-choose-us-img.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">كيف تختار أثاث منزل انيق ومتناسق؟</h2>
                    <p>يقدم متجر المنزل العصري اجمل التنسيقات لأثاث المنزل حيث يمكنك اختيار اثاث منزلك حسب اللون الابيض او
                        الاخضر او البيج او حسب الحجم المناسب لمنزلك كبير متوسط او صغير او حسب السعر </p>


                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Section -->



@endsection
