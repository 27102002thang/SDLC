@extends('customer.index')

@section('content')
    <div class="container">
        <h3 class="text-center">Danh sách sản phẩm</h3>
        <div class="row">
            @foreach($listProducts as $listProduct)
                <div class="col-md-4 mb-4"> <!-- Sử dụng col-md-4 để mỗi hàng chứa 3 sản phẩm trên màn hình trung bình trở lên -->
                    <div class="card" style="width: 18rem;">
                        <img src="/image/{{$product->image}}" class="card-img-top" alt="Image of {{ $listProduct->name }}">
                        <div class="card-body">
                            <h5 class="card-title">Tên: {{ $listProduct->name }}</h5>
                            <p class="card-text">Giá: {{ number_format($listProduct->price) }} VNĐ</p>
                            <a href="#" class="btn btn-primary">Xem</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Uncomment để sử dụng phân trang, đảm bảo $listProducts là instance của LengthAwarePaginator --}}
        {{-- {{ $listProducts->links() }} --}}
    </div>
@endsection


