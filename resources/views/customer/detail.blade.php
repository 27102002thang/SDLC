@extends('customer.index')

@section('content')
    <style>
        .product__details-thumb-big.w-img {
            width: 568px;
            height: 300px;
        }

        .product__details-thumb-big.w-img img {
            width: 568px;
            height: 300px;
            object-fit: contain; /* Hoặc object-fit: cover; tùy thuộc vào yêu cầu của bạn */
        }

        .product__details-thumb-tab-content {
            width: 100%;
            height: 100%;
        }

    </style>

    <main>
        <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
            <div class="breadcrumb__thumb" data-background="{{asset('assets/imgs/bg/breadcrumb-bg-furniture.jpg')}}"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper text-center">
                            <h2 class="breadcrumb__title">Chi tiết xe</h2>
                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="/customer/index">Home</a></span></li>
                                        <li><span>Chi tiết {{$detail->name}}</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="bd-product__area section-space-medium text-center">Chi tiết {{$detail->name}}</h4>
        <!-- Product details area start -->
        <div class="product__details-area section-space-medium">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-lg-7 ">
                        <div class="product__details-thumb-wrapper d-sm-flex align-items-start mr-50">
                            <div class="product__details-thumb-tab mr-20">
                                <nav>
                                    <div class="nav nav-tabs flex-nowrap flex-sm-column" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="img-1-tab" data-bs-toggle="tab"
                                                data-bs-target="#img-1" type="button" role="tab" aria-controls="img-1"
                                                aria-selected="true">
                                            <img src="{{asset('/image')}}/{{$detail->image}}" alt="product-sm-thumb">
                                        </button>
                                        <button class="nav-link" id="img-2-tab" data-bs-toggle="tab" data-bs-target="#img-2"
                                                type="button" role="tab" aria-controls="img-3" aria-selected="false">
                                            <img src="{{asset('/image')}}/{{$detail->image}}"   alt="product-sm-thumb">
                                        </button>
                                        <button class="nav-link" id="img-3-tab" data-bs-toggle="tab" data-bs-target="#img-3"
                                                type="button" role="tab" aria-controls="img-3" aria-selected="false">
                                            <img src="{{asset('/image')}}/{{$detail->image}}" alt="product-sm-thumb">
                                        </button>
                                    </div>
                                </nav>
                            </div>
                            <div class="product__details-thumb-tab-content">
                                <div class="tab-content" id="productthumbcontent">
                                    <div class="tab-pane fade show active" id="img-1" role="tabpanel"
                                         aria-labelledby="img-1-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="{{asset('/image')}}/{{$detail->image}}"  alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="img-2" role="tabpanel" aria-labelledby="img-2-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="{{asset('/image')}}/{{$detail->image}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="img-3" role="tabpanel" aria-labelledby="img-3-tab">
                                        <div class="product__details-thumb-big w-img">
                                            <img src="{{asset('/image')}}/{{$detail->image}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-5 ">
                        <div class="product__details-content pr-80">
                            <div class="product__details-top d-sm-flex align-items-center mb-15">
                                <div class="product__details-tag mr-10">
                                    <a href="#">Đánh giá</a>
                                </div>
                                <div class="product__details-rating mr-10">
                                    <a href="#"><i class="fa-solid fa-star"></i></a>
                                    <a href="#"><i class="fa-solid fa-star"></i></a>
                                    <a href="#"><i class="fa-regular fa-star"></i></a>
                                </div>
                                <div class="product__details-review-count">
                                    <a href="#">10 Reviews</a>
                                </div>
                            </div>
                            <h3 class="product__details-title text-capitalize">{{$detail->name}}</h3>
                            <div class="product__details-price">
{{--                                <span class="old-price">{{$detail->price}}</span>--}}
                                <span class="new-price">{{ number_format($detail->price, 0, ',', '.') }} VNĐ/ngày</span>

                            </div>

                            <div class="product__details-action mb-35">
                                <div class="product__add-cart">
                                    <a href="{{route('order',$detail->id)}}" class="fill-btn cart-btn">
                              <span class="fill-btn-inner">
                                 <span class="fill-btn-normal">Đặt ngay<i
                                         class="fa-solid fa-basket-shopping"></i></span>
                                 <span class="fill-btn-hover">Đặt ngay<i
                                         class="fa-solid fa-basket-shopping"></i></span>
                              </span>
                                    </a>
                                </div>
                                <div class="product__add-wish">
                                    <a href="#" class="product__add-wish-btn"><i class="fa-solid fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product__details-meta mb-20">
                                <div class="sku">
                                    <span>Số chỗ:</span> <a href="#">{{$detail->seats}}</a>
                                </div>
{{--                                <div class="categories">--}}
{{--                                    <span>Hộp số:</span> <a href="#">{{$detail->transmission}}</a>--}}
{{--                                </div>--}}
                                <div class="tag">
                                    <span>Loại Nhiên Liệu:</span> <a href="#">{{$detail->fuel_type}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__details-additional-info section-space-medium-top">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-lg-4">
                            <div class="product__details-more-tab mr-15">
                                <nav>
                                    <div class="nav nav-tabs flex-column " id="productmoretab" role="tablist">
{{--                                        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"--}}
{{--                                                data-bs-target="#nav-description" type="button" role="tab"--}}
{{--                                                aria-controls="nav-description" aria-selected="true">Mô Tả</button>--}}
                                        <button class="nav-link active" id="nav-additional-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-additional" type="button" role="tab"
                                                aria-controls="nav-additional" aria-selected="false">Thông Số Chi Tiết</button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8 col-lg-8">
                            <div class="product__details-more-tab-content">
                                <div class="tab-content" id="productmorecontent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                         aria-labelledby="nav-description-tab">
                                        <div class="product__details-info">
                                            <ul>
                                                <li>
                                                    <h4>Nhiên Liệu</h4>
                                                    <span>{{$detail->fuel_type}}</span>
                                                </li>
                                                <li>
                                                    <h4>Số Chỗ </h4>
                                                    <span>{{$detail->seats}} chỗ</span>
                                                </li>
                                                <li>
                                                    <h4>Hộp số</h4>
                                                    <span>{{$detail->transmission}}</span>
                                                </li>
                                                <li>
                                                    <h4>Tiêu Hao </h4>
                                                    <span>{{$detail->fuel_consumption}}  l/100km</span>
                                                </li>
                                                <li>
                                                    <h4>Hãng Xe</h4>
                                                    <span>{{$detail->brand}}</span>
                                                </li>
                                                <li>
                                                    <h4>Biển số xe</h4>
                                                    <span>{{$detail->license_plates}}</span>
                                                </li>
                                                <li>
                                                <div class="product__details-des">
                                                    <p>{{$detail->description}}</p>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product details area end -->
        <!-- Modal for rent car -->
{{--        <div class="modal fade" id="rentCarModal" tabindex="-1" role="dialog" aria-labelledby="rentCarModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="rentCarModalLabel">Đặt xe</h5>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form action="{{ route('rent.store') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="car_id" value="{{ $detail->id }}">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="name">Tên:</label>--}}
{{--                                <input type="text" class="form-control" id="name" name="name" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="email">Email:</label>--}}
{{--                                <input type="email" class="form-control" id="email" name="email" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="phone">Số điện thoại:</label>--}}
{{--                                <input type="text" class="form-control" id="phone" name="phone" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="start_date">Ngày bắt đầu:</label>--}}
{{--                                <input type="date" class="form-control" id="start_date" name="start_date" required>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="end_date">Ngày kết thúc:</label>--}}
{{--                                <input type="date" class="form-control" id="end_date" name="end_date" required>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-primary">Đặt ngay</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <script>--}}
{{--        function promptLogin() {--}}
{{--            alert('Vui lòng đăng nhập để đặt xe.');--}}
{{--        }--}}
    </script>

    </main>
@endsection


