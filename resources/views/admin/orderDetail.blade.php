@extends("admin.home")

@section('content')
    <br><br><br>
    <div class="container mt-5">
        <h2>Danh sách đơn hàng</h2>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Tên xe</th>
                <th>Giá xe</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày đặt</th>
                <th>Ngày trả</th>
                <th>Số ngày thuê</th>
                <th>Tổng số tiền</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->ten_xe }}</td>
                    <td>{{ number_format($order->gia_xe) }} VND</td>
                    <td>{{ $order->ten_khach_hang }}</td>
                    <td>{{ $order->so_dien_thoai_khach_hang }}</td>
                    <td>{{ $order->dia_chi_khach_hang }}</td>
                    <td>{{ $order->ngay_dat }}</td>
                    <td>{{ $order->ngay_tra }}</td>
                    <td>{{ $order->so_ngay_thue }}</td>
                    <td>{{ number_format($order->tong_so_tien) }} VND</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
