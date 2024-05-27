@extends('admin.home')

@section('content')

<div class="container">
    <br>
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
            <label for="fuel_type" class="form-label">Nhiên Liệu</label>
            <textarea class="form-control" name="fuel_type" id="fuel_type" placeholder="Nhiên Liệu sử dụng" ></textarea>
        </div>
        <div class="mb-3">
            <label for="seats" class="form-label">Số Ghế</label>
            <textarea class="form-control" name="seats" id="seats" placeholder="Số Ghế của xe" ></textarea>
        </div>
        <div class="mb-3">
            <label for="fuel_consumption" class="form-label">Nhiên liệu tiêu hao</label>
            <textarea class="form-control" name="fuel_consumption" id="fuel_consumption" placeholder="Nhiên liệu tiêu hao sau 100km" ></textarea>
        </div>
        <div class="mb-3">
            <label for="transmission" class="form-label">Hộp số</label>
            <textarea class="form-control" name="transmission" id="transmission" placeholder="Hộp số của xe" ></textarea>
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Hãng xe</label>
            <textarea class="form-control" name="brand" id="brand" placeholder="Hãng xe" ></textarea>
        </div>
        <div class="mb-3">
            <label for="license_plates" class="form-label">Biển số xe</label>
            <textarea class="form-control" name="license_plates" id="license_plates" placeholder="Biển số xe" ></textarea>
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
