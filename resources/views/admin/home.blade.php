<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard with Chart.js</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Màu nền */
        }
        .container-fluid {
            padding-left: 0; /* Xóa padding bên trái */
            padding-right: 0; /* Xóa padding bên phải */
        }
        .main-content {
            margin-left: 250px; /* Margin bên trái của phần nội dung để giữ khoảng cách với sidebar */
        }
        .navbar {
            padding: 0 15px; /* Thêm padding cho navbar */
        }
        #myChart {
            max-width: 100%; /* Đảm bảo biểu đồ không vượt quá kích thước của container */
            height: auto; /* Cho phép biểu đồ tự động điều chỉnh chiều cao */
        }
        .chart-container {
            padding: 20px;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<div class="container-fluid">
    {{--Header--}}

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('admin.header')
        </nav>
    {{--navbar--}}


    <div id="layoutSidenav_content">
        <div class="container">
        @yield('content')
        </div>
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
