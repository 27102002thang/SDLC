@extends('admin.home')

@section('content')

    <br><br><br>

    <div class="container">
        <h2 class="text-primary">Sửa thông tin sản phẩm</h2>
        <form action="/order_saveUpdate" method="post" >
            @csrf

            <div class="mb-3">
                <label for="id" class="form-label">ID: {{$order->id}}</label>
                <input class="form-control " type="hidden" name="id" value="{{$order->id}}" >
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Tên khách hàng: </label>
                <input class="form-control " name="name" value="{{$order->name}}" >
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ: </label>
                <input class="form-control" name="address" id="address" value="{{$order->address}}" >
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại: </label>
                <input class="form-control" name="phone" id="phone" value="{{$order->phone}} ">
            </div>
            <div class="mb-3">
                <label for="order_date" class="form-label">Ngày đặt: </label>
                <input class="form-control" name="order_date" id="order_date" type="date" value="{{$order->order_date}}" >
            </div>

            <div class="mb-3">
                <label for="return_date" class="form-label">Ngày trả: </label>
                <input class="form-control" name="return_date" id="return_date" type="date" value="{{$order->return_date}}"  >
            </div>
            <div class="mb-3">
                <label for="total_price" class="form-label">Tổng số tiền (Vnd): </label>
                <input class="form-control" name="total_price" id="total_price" value="{{($order->total_price)}}" >
            </div>
            <div class="mb-3">
                <label for="status_id" class="form-label">Trạng Thái: (1:Chưa xác nhận, 2: Xác nhận đặt xe)</label>
                <input class="form-control" name="status_id" id="status_id" value="{{($order->status_id)}}" >
            </div>


{{--            <div class="mb-3">--}}
{{--                <label for="brand" class="form-label">Hãng xe</label>--}}
{{--                <input class="form-control" name="brand" id="brand" value="{{$order->brand}}" >--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="license_plates" class="form-label">Biển số xe</label>--}}
{{--                <input class="form-control" name="license_plates" id="license_plates" value="{{$order->license_plates}}">--}}
{{--            </div>--}}


            <button class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection
