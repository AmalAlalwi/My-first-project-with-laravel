
@extends('user.layout.master')
@section('title', 'sign_up')
@section('main_content')
    <div class="container">
        <div class="sign-up-form">
            <h2> إنشاء حساب</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input type="text" placeholder=" الاسم الاول" class="form-control" name="name" value="{{ old('name') }}"
                    required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" placeholder=" الاسم الأخير" class="form-control" name="last_name"
                    value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني"
                    value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" name="region" placeholder="المحافظة" class="form-control">

                <input type="password" class="form-control" placeholder="كلمة المرور" name="password" required
                    autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="تأكيد كلمة المرور" class="form-control" name="password_confirmation"
                    required autocomplete="new-password">
                {{-- <input type="password" name="password" placeholder="كلمة المرور" class="form-control" minlength="8">
                <input type="password" placeholder="تأكيد كلمة المرور" class="form-control" minlength="8"> --}}

                <a href="{{ route('home') }}"><button type="submit" class="btn btn-primary btn-block">إنشاء حساب</button></a>
        </div>
        </form>
    </div>
    </div>
@endsection
