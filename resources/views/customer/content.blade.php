{{--@extends('customer.index')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <h3 class="text-center">Danh sách sản phẩm</h3>--}}
{{--        <div class="row">--}}
{{--            @foreach($listProducts as $listProduct)--}}
{{--                <div class="col-md-4 mb-4"> <!-- Sử dụng col-md-4 để mỗi hàng chứa 3 sản phẩm trên màn hình trung bình trở lên -->--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <img src="/image/{{$product->image}}" class="card-img-top" alt="Image of {{ $listProduct->name }}">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">Tên: {{ $listProduct->name }}</h5>--}}
{{--                            <p class="card-text">Giá: {{ number_format($listProduct->price) }} VNĐ</p>--}}
{{--                            <a href="#" class="btn btn-primary">Xem</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        --}}{{-- Uncomment để sử dụng phân trang, đảm bảo $listProducts là instance của LengthAwarePaginator --}}
{{--        --}}{{-- {{ $listProducts->links() }} --}}
{{--    </div>--}}
{{--@endsection--}}

@extends('customer.index')

@section('content')
    <main>
        <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
            <div class="breadcrumb__thumb" data-background="{{asset('assets/imgs/bg/breadcrumb-bg-furniture.jpg')}}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper text-center">
                            <h2 class="breadcrumb__title">Product</h2>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="/customer/index">Home</a></span></li>
                                        <li><span>Product</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bd-product__area section-space">
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="bd-product__result mb-30">
{{--                                <h4>Số kết quả: {{$totalResults}} Xe</h4>--}}
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6">
                            <div
                                class="product__filter-wrapper d-flex flex-wrap gap-3 align-items-center justify-content-md-end mb-30">
                                <div class="bd-product__filter-btn">
                                    <button type="button"><i class="fa-solid fa-list"></i> Filter</button>
                                </div>
                                <div class="product__filter-count d-flex align-items-center">
                                    <div class="btn-dropdown__options">
                                        <select>
                                            <option>Show 20</option>
                                            <option>This Past Week</option>
                                            <option>This Past Month</option>
                                            <option>This Past Year</option>
                                            <option>All Time</option>
                                        </select>
                                    </div>
                                    <div class="bd-product__filter-style nav nav-tabs" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-grid" type="button" role="tab" aria-selected="false"><i
                                                class="fa-solid fa-grid"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list"
                                                type="button" role="tab" aria-selected="true"><i class="fa-solid fa-bars"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__filter-tab">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="nav-grid" role="tabpanel"
                                     aria-labelledby="nav-grid-tab">
                                    <div class="row g-5">
                                        @foreach($listProduct as $listProducts)
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                <div class="product-item">
                                                    <div class="product-badge">
{{--                                                        <span class="product-trending">{{number_format($listProducts->discount) }}% OFF</span>--}}
                                                    </div>
                                                    <div class="product-thumb" >
                                                        <a href="#">
                                                            @if($listProducts->image)
                                                                <img src="/image/{{$listProducts->image}}" class="card-img-top" alt="Image of {{ $listProducts->name }}" >
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4 class="product-title"><a href="{{route('detail',$listProducts->id)}}">{{ $listProducts->name }}</a>
                                                        </h4>
                                                        <div>
                                                            Số Ghế: {{ $listProducts->seats }}
                                                        </div>
{{--                                                        <div>--}}
{{--                                                             {{ $listProducts->transmission }}--}}
{{--                                                        </div>--}}

                                                        <div class="product-price">
                                                            <span class="product-new-price">{{ number_format($listProducts->price) }} VNĐ/Ngày</span>
                                                        </div>
                                                        <div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav aria-label="Page navigation example" class="mb-4">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    {{ $listProduct->links() }}
                </li>
            </ul>
        </nav>

@endsection
