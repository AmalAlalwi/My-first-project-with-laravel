<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
    arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="#">MH<span>Modern Home</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> --}}
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li><a class="nav-link" href="{{route('product.create')}}">إضافة منتج جديد</a><li>
                <li><a class="nav-link" href="{{route('static')}}">صفحة الاحصائيات</a><li>
                    <li class="nav-item"><a class="nav-link" href="{{route('user.create')}}">صفحة المستخدمين</a></li>
                <li><a class="nav-link" href="{{route('product.index')}}">الصفحة الرئيسية</a><li>

            </ul>
        </div>
    </div>

</nav>
