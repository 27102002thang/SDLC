@extends('admin.home')

@section('content')
<div>
    <a href="/admin/account">Quay lại</a>
    <h2 style="text-align: center;color: #fd7e14">Thêm Tài Khoản</h2>
</div>

<div class="container">
    <form action="/accountSave" method="post">
        @csrf
        @if($errors->any())
            @foreach($errors->all() as $obj)
                <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="btn" data-bs-dismiss="alert"></button>
                    {{$obj}}
                </div>
            @endforeach
        @endif()
        <div class="mb-3">
            <label for="name" class="form-label">Họ và tên</label>
            <input class="form-control " name="name" id="name" placeholder="Nhập tên" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email ví dụ: name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input name="password" class="form-control" id="password" type="password">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input name="phone" class="form-control" id="phone" placeholder="Nhập số điện thoại">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Tài Khoản</label>
            <input name="role" class="form-control" id="role" placeholder="Nhập tài khoản customer hoặc admin">
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
