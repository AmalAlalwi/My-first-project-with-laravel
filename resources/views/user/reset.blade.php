@extends('user.layout.master')
@section('title', 'reset')
@section('main_content')
<div class="container">

    <div class="login-form">


      <form method="POST" action="{{ route('password.update') }}">
        @csrf
        {{--<input type="hidden" name="token" value="{{ $token }}">
           <input type="email" class="form-control" placeholder="البريد الالكتروني">--}}
            <input type="email"  placeholder="البريد الالكتروني" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input  type="password" placeholder="كلمة المرور" class="form-control" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="password"  placeholder="تأكيد كلمة المرور"class="form-control" name="password_confirmation" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
           <a  href="{{ route('password.update') }}"> <button type="submit" class="btn btn-primary btn-block">
               إعادة تعيين كلمة المرور
            </button></a>
        {{--<button type="submit" class="btn btn-primary btn-block">إرسال</button>--}}
        </div>
    </form>
</div>

@endsection
