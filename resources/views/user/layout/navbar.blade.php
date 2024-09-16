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
                <li class="nav-item dropdown">
                    <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        الاصناف
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item"  href="{{route('product.show','1')}}">المفروشات</a></li>
                        <li><a class="dropdown-item" href="{{route('product.show','2')}}">الادوات الكهربائية</a></li>
                        <li><a class="dropdown-item" href="{{route('product.show','3')}}">ادوات المطبخ</a></li>
                    </ul>
                </li>

                <li><a class="nav-link" href="{{route('about')}}">حول االمتجر</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}">الصفحة الرئيسية</a></li>
            </ul>
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                {{-- <li><a class="nav-link" href="login.html"><img src="images/user.svg"></a></li> --}}
                <li><a class="nav-link" href="{{route('cart')}}"><img src="{{asset('images/cart.svg')}}"></a></li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                    @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
                        </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('تسجيل خروج') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>

</nav>
