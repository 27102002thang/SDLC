<!doctype html>
<html lang="\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
</head>
<body>
<br>
<a href="/account">Quay lại</a>
<div class="container">
    <h2 class="text-primary">Sửa thông tin tài khoản</h2>
    <form action="/accountSaveUpdate" method="post">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID: {{$account->id}}</label>
            <input class="form-control " type="hidden" name="id" value="{{$account->id}}" >
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input class="form-control " name="name" value="{{$account->name}}" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{$account->email}}" placeholder="Nhập email ví dụ: name@example.com">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control " name="phone" value="{{$account->phone}}" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" class="form-control" id="password" value="{{$account->password}}" type="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Tài Khoản</label>
            <input class="form-control " name="role" value="{{$account->role}}" >
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>
