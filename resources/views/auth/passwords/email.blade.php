{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
@extends('user.layout.master')
@section('title', 'sign_up')
@section('main_content')
    <div class="container">
        <div class="forget_pass-form">
            <h2>هل نسيت كلمة المرور؟</h2>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{route('sendmail')}}">
                @csrf

                {{-- <input type="hidden" name="token" value="{{ $token }}">
           <input type="email" class="form-control" placeholder="البريد الالكتروني"> --}}
           <input type="email" placeholder="البريد الالكتروني" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror

               <button type="submit" class="btn btn-primary btn-block">
                    {{ __('إرسال') }}
                </button>

                {{-- <button type="submit" class="btn btn-primary btn-block">إرسال</button> --}}
        </div>
        </form>
    </div>

@endsection
