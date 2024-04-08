<!doctype html>
<html lang="\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">

</head>
<body>
<a href="/product">Quay Lại</a>
<div class="container">
    <h2 class="text-primary">Sửa thông tin sản phẩm</h2>
    <form action="/productSaveUpdate" method="post">
        @csrf
        <div class="mb-3">
            <label for="productName" class="form-label">ID: {{$product->id}}</label>
            <input class="form-control " type="hidden" name="id" value="{{$product->id}}" >
        </div>

        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm</label>
            <input class="form-control " name="productName" value="{{$product->name}}" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input class="form-control" name="price" id="productName" value="{{$product->price}}" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <input class="form-control" name="description" id="description" value="{{$product->description}}" >
        </div>

{{--        <div class="mb-3">--}}
{{--            <label for="date" class="form-label">Imported Date</label>--}}
{{--            <textarea class="form-control" name="date" id="date" placeholder="Nhập ngày" ></textarea>--}}
{{--        </div>--}}

        <button class="btn btn-primary">Save</button>
    </form>
</div>
</body>
</html>
