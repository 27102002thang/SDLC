@extends('admin.home')

@section('content')

<br><br><br>

<div class="container">
    <h2 class="text-primary">Sửa thông tin sản phẩm</h2>
    <form action="/productSaveUpdate" method="post" enctype="multipart/form-data">
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
            <input class="form-control" name="price" id="price" value="{{$product->price}}" >
        </div>

        <div class="mb-3">
            <label for="fuel_type" class="form-label">Nhiên Liệu</label>
            <input class="form-control" name="fuel_type" id="fuel_type" value="{{$product->fuel_type}} ">
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Số Ghế</label>
            <input class="form-control" name="seats" id="seats" value="{{$product->seats}}" >
        </div>
        <div class="mb-3">
            <label for="fuel_consumption" class="form-label">Nhiên liệu tiêu hao</label>
            <input class="form-control" name="fuel_consumption" id="fuel_consumption" value="{{$product->fuel_consumption}}"  >
        </div>
        <div class="mb-3">
            <label for="transmission" class="form-label">Hộp số</label>
            <input class="form-control" name="transmission" id="transmission" value="{{$product->transmission}}" >
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Hãng xe</label>
            <input class="form-control" name="brand" id="brand" value="{{$product->brand}}" >
        </div>
        <div class="mb-3">
            <label for="license_plates" class="form-label">Biển số xe</label>
            <input class="form-control" name="license_plates" id="license_plates" value="{{$product->license_plates}}">
        </div>

        <div class="col-12">
            <label for="image" class="form-label">Image</label>
            <div class="input-group mb-3">
                <input class="form-control mt-2" type="file" name="image" id="image" required accept="{{asset('image')}}">
                <label class="input-group-text" >Upload</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" name="description" id="description" placeholder="Mô tả sản phẩm" ></textarea>
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>

@endsection
