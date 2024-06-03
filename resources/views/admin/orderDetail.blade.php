@extends("admin.home")

@section('content')
    <br><br><br>
    <div class="container mt-5">
        <h2>Danh sách đặt xe</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Tên xe</th>
                <th>Giá xe</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày đặt</th>
                <th>Ngày trả</th>
                <th>Số ngày thuê</th>
                <th>Tổng số tiền</th>
                <th>Ghi Chú</th>
                <th>Trạng thái</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->car_name }}</td>
                    <td>{{ number_format($order->car_price) }} VND</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->return_date }}</td>
                    <td>{{ $order->rental_days }}</td>
                    <td>{{ number_format($order->total_price) }} VND</td>
                    <td>{{ $order->note }}</td>
                    <td>{{ $order->stt_value }}</td>

                    <td><a href="/order_delete/{{$order->id}}">Delete</a></td>
                    <td><a href="/order_update/{{$order->id}}">Update</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
