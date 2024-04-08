<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container-fluid">
    {{--Header--}}
    <div>
        @include('customer.header')
    </div>
    {{--Main contens--}}
    <div class="vh-200 w-200 " style="background-image: url('{{ asset('image/10.jpg') }}">
        <br>
        <div class="container">
            <div class="row">
                @foreach($listProduct as $listProducts)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="/image/{{$listProducts->image}}" style="width: " class="card-img-top" alt="Image of {{ $listProducts->name }}">
                            <div class="card-body">
                                <h5 class="card-title">Tên: {{ $listProducts->name }}</h5>
                                <p class="card-text">Giá: {{ number_format($listProducts->price) }} VNĐ</p>
                                <a href="#" class="btn btn-primary">Xem</a>
                                <a href="#" class="btn btn-primary" style="float: right">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
{{--             Uncomment để sử dụng phân trang, đảm bảo $listProducts là instance của LengthAwarePaginator--}}
{{--             {{ $listProducts->links() }}--}}
        </div>
    </div>
    {{--Footer--}}
    <div>
        @include('customer.footer')
    </div>
</div>

</body>
</html>
