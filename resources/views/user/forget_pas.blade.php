@extends('user.layout.master')
@section('title','pass')

@section('main_content')

<div class="container">
  <div class="forget_pass-form">
      <h2>هل نسيت كلمة المرور؟</h2>
      <form action="{{ route('sendmail') }}" method="POST">
          @csrf <!-- لتأمين النموذج -->
          <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" required>

          <button type="submit" href="{{ route('password.update') }}" class="btn btn-primary btn-block">إرسال</button>
      </form>
      @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif
  </div>
</div>

@endsection
