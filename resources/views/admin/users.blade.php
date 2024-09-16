
@extends('admin.layout.master')
@section('title','admin')
@section('main')
<div id="products">
<div class="container">

<div class="row my-5 mx-2">
    <div class="col-12">
    <table class="table table-striped table-hover table-responsive text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم الأول</th>
            <th scope="col">الاسم الأخير</th>
            <th scope="col">البريد الالكتروني</th>
            <th scope="col">مالك أو مستخدم؟</th>
            <th scope="col">التعديلات</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $key => $user)
        <tr>
            <td scope="col">{{($key+1)}}</td>
            <td scope="col">{{$user->name}}</td>
            <td scope="col">{{$user->last_name}}</td>
            <td scope="col">{{$user->email}}</td>
            <td scope="col">{{$user->role}}</td>
            <td scope="col">
                <form class="d-inline-block" action="{{route('user.destroy',$user->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
    </div>
</div>
</div>


</div>
@endsection

