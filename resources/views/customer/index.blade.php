<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>

    <style>

        .product-item {
            height: 100%; /* Đặt chiều cao cố định cho mỗi sản phẩm */
        }

        .product-thumb img {
            width: 200px; /* Đặt chiều rộng của hình ảnh là 100% để nó sẽ căn chỉnh với kích thước của phần tử cha */
            height: 120px; /* Đảm bảo tỷ lệ khung hình không bị biến đổi */
        }

    </style>

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>
<div class="container-fluid">
    {{--Header--}}
    <div>
        @include('customer.header')
    </div>
    {{--Main contens--}}
    <div>
        @yield('content')
    </div>
{{--    <div class="vh-200 w-200 " style="background-image: url('{{ asset('image/10.jpg') }}">--}}
{{--        <br>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($listProduct as $listProducts)--}}
{{--                    <div class="col-md-4 mb-4">--}}
{{--                        <div class="card" style="width: 18rem;">--}}
{{--                            <img src="/image/{{$listProducts->image}}" style="width: " class="card-img-top" alt="Image of {{ $listProducts->name }}">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5 class="card-title">Tên: {{ $listProducts->name }}</h5>--}}
{{--                                <p class="card-text">Giá: {{ number_format($listProducts->price) }} VNĐ</p>--}}
{{--                                <a href="#" class="btn btn-primary">Xem</a>--}}
{{--                                <a href="#" class="btn btn-primary" style="float: right">Mua ngay</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--             Uncomment để sử dụng phân trang, đảm bảo $listProducts là instance của LengthAwarePaginator--}}
{{--             {{ $listProducts->links() }}--}}
{{--        </div>--}}
{{--    </div>--}}
    {{--Footer--}}
    <div>
        @include('customer.footer')
    </div>
</div>

</body>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/counterup.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/beforeafter.jquery-1.0.0.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</html>
