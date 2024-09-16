
@extends('user.layout.master')
@section('title','about')

@section('main_content')




		<!-- Start Header/Navigation -->

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>حول المتجر</h1>
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
		<!-- End Hero Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6">
						<h2 class="section-title">كيف استطيع استخدام الموقع؟</h2>
						<p>لاختيار اثاث منزلك بشكل سهل ومريح قم باتباع الخطوات التالية</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<h3>1</h3>
									<p>يمكنك تصفح الموقع والمنتجات من خلال الضغط على الاصناف سيظر ثلاث اقسام للمتجر يمكنك اختيار القسم الذي تريد  </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">

									<h3>2</h3>
									<p>إذا اردت إضافة منتج للسة عليك اولا انشاء حساب ثم تسجيل الدخول</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">

									<h3>3</h3>
									<p>بعد اختيار المنتجات وإضافتها للسلة يمكنك حفظ السلة والدفع لاحقاً وتعديل المنتجات أو إتمام عملية الدفع مباشرة </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<h3>4</h3>
									<p>لإتمام عملية الدفع ستصل اليك رسالة على البريد الالكتروني فيها رقم الفاتورة  قم بالدفع بالطريقة المناسبة لك وبعدها قم بتصوير إشعالر الدفعوإرساله إلى البريد الالكتروني الخاص بالمتجر</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->
		<!-- Start Footer Section -->

			<!-- End Footer Section -->


@endsection


