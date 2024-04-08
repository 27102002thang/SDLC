<!doctype html>
<html lang="en">
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
    <h2 class="text-primary">Thêm sản phẩm mới</h2>
    <form action="/productSave" method="post" enctype="multipart/form-data">
        @csrf
        {{-- validate --}}
        @if($errors->any())
            @foreach($errors->all() as $obj)
                <div class="alert alert-warning alert-dismissible fade show">
                    <button type="button" class="btn" data-bs-dismiss="alert"></button>
                    {{$obj}}
                </div>
            @endforeach
        @endif()
        <div class="mb-3">
            <label for="productName" class="form-label">Tên sản phẩm</label>
            <textarea class="form-control " name="productName" id="productName" placeholder="Nhập tên sản phẩm" ></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <textarea class="form-control" name="price" id="productName" placeholder="Nhập giá tiền" ></textarea>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" name="description" id="description" placeholder="Mô tả sản phẩm" ></textarea>
        </div>

        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <div class="input-group mb-3">
                <input class="form-control mt-2" type="file" name="image" id="image" required accept="{{asset('image')}}">
                <label class="input-group-text" >Upload</label>
            </div>
        </div>

        <button class="btn btn-primary">Save</button>
    </form>

</div>
</body>
</html>
