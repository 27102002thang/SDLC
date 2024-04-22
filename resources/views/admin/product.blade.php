@extends('admin.home')

@section('content')

    <br>
    <h3 style="text-align: center;color: #fd7e14">Danh sách sản phẩm</h3>
    <button class="btn btn-primary"><a href="/productAdd" class="text-light">Add</a></button>
    <table class="table ">
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá tiền</td>
            <td>Loại nhiên liệu</td>
            <td>Số chỗ ngồi</td>
            <td>Biển số xe</td>

            <td>Ngày cập nhập</td>
            <td></td>
            <td></td>

        </tr>
        <hr>
        @foreach($listProduct as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->fuel_type}}</td>
                <td>{{$product->seats}}</td>
                <td>{{$product->license_plates}}</td>
                <td>{{$product->price}}</td>
                <td><img src="/image/{{$product->image}}" style="width:60%; height: 60%" /></td>

                <td><a href="/product_delete/{{$product->id}}">Delete</a></td>
                <td><a href="/product_update/{{$product->id}}">Update</a></td>

            </tr>

        @endforeach
    </table>

@endsection
