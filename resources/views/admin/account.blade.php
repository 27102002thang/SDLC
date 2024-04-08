<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
    <title>Show Account</title>
</head>
<body>
<div class="container">
    <br>
    <a href="/admin/home">Quay lại trang chủ</a>
<h2 style="text-align: center; color: #fd7e14">Danh sách tài khoản</h2>
</div>

<div class="container">
    <button class="btn btn-primary"><a href="/addAccount" class="text-light">Add</a></button>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Tên khách hàng </td>
            <td>Email</td>
            <td>Password</td>
            <td>Số điện thoại</td>
            <td>Tài khoản</td>
            <td></td>
            <td></td>
        </tr>
        <hr>
        @foreach($listAcc as $obj)
            <tr>
                <td>{{$obj->id}}</td>
                <td>{{$obj->name}}</td>
                <td>{{$obj->email}}</td>
                <td>{{$obj->password}}</td>
                <td>{{$obj->phone}}</td>
                <td>{{$obj->role}}</td>
                <td><a href="/account_delete/{{$obj->id}}">Delete</a></td>
                <td><a href="/account_update/{{$obj->id}}">Update</a></td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
