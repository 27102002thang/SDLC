@extends('admin.home')

@section('content')

    <br>
    <h3 style="text-align: center;color: #fd7e14">Danh sách sản phẩm</h3>
    <button class="btn btn-primary"><a href="/admin/productAdd" class="text-light">Add</a></button>
    <table class="table table-bordered  ">
        <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá tiền</th>
            <th>Loại nhiên liệu</th>
            <th>Số chỗ ngồi</th>
            <th>Biển số xe</th>
            <th>Hộp Số</th>
            <th>Giá thuê (VND/Ngày)</th>
            <th>Giá thuê (VND/Ngày)</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <hr>
        @foreach($listProduct as $product)
            <tbody >
            <tr>
                <td>{{$product->id}}</td>
                <td><img src="/image/{{$product->image}}" style="width:60%; height: 60%" /><br>
                    {{$product->name}}</td>
                <td>{{number_format($product->price)}} VND</td>
                <td>{{$product->fuel_type}}</td>
                <td>{{$product->seats}}</td>
                <td>{{$product->license_plates}}</td>
                <td>{{$product->transmission}}</td>
                <td>{{$product->price}}</td>
                <td></td>
                <td><a href="/product_delete/{{$product->id}}">Delete</a></td>
                <td><a href="/product_update/{{$product->id}}">Update</a></td>
            </tr>
            </tbody>
        @endforeach
    </table>

@endsection
