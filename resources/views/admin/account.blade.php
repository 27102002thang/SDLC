@extends('admin.home')

@section('content')
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
@endsection
