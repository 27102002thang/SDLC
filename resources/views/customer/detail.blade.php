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
                                    <a href="#">Construction</a>
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
                                <span class="old-price">{{$detail->price}}</span>
                                <span class="new-price">{{$detail->price}} VNĐ/ngày</span>
                            </div>
                            <p>{{$detail->description}}</p>

                            <div class="product__details-action mb-35">
                                <div class="product__add-cart">
                                    <a href="javascript:void(0)" class="fill-btn cart-btn">
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
                                <div class="categories">
                                    <span>Brand:</span> <a href="#">Hyundai</a>
                                </div>
                                <div class="tag">
                                    <span>Loai nhien lieu:</span> <a href="#">Xe xăng</a>
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
                                        <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-description" type="button" role="tab"
                                                aria-controls="nav-description" aria-selected="true">Description</button>
                                        <button class="nav-link" id="nav-additional-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-additional" type="button" role="tab"
                                                aria-controls="nav-additional" aria-selected="false">Additional Information </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8 col-lg-8">
                            <div class="product__details-more-tab-content">
                                <div class="tab-content" id="productmorecontent">
                                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                         aria-labelledby="nav-description-tab">
                                        <div class="product__details-des">
                                            <p>In marketing a product is an object or system made available for consumer use it is
                                                anything that can be offered to a market to
                                                the desire or need of a retailing, products are often referred to as merchandise,
                                                and in manufacturing, products are bought as
                                                materials and then sold as finished goods. A service regarded to as a type of
                                                product. Commodities are usually raw materials
                                                metals and agricultural products, but a commodity can also be anything wide the open
                                                market. In project management,
                                                the formal definition of the project deliverables</p>
                                            <p>A product can be classified as tangible or intangible. A tangible product is a
                                                physical object that can be perceived by touch
                                                building, vehicle, gadget, An intangible product is a product that can only be
                                                perceived indirectly such as an insurance policy.
                                                can be broadly classified under intangible be durable or non durable. A product line
                                                is "a group of products that are closely
                                                either because they function in a similar manner, are sold to the same
                                                customergroups.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-additional" role="tabpanel"
                                         aria-labelledby="nav-additional-tab">
                                        <div class="product__details-info">
                                            <ul>
                                                <li>
                                                    <h4>Weight</h4>
                                                    <span>2 lbs</span>
                                                </li>
                                                <li>
                                                    <h4>Dimensions</h4>
                                                    <span>12 × 16 × 19 in</span>
                                                </li>
                                                <li>
                                                    <h4>Product</h4>
                                                    <span>Purchase this product on rag-bone.com</span>
                                                </li>
                                                <li>
                                                    <h4>Color</h4>
                                                    <span>Gray, Black</span>
                                                </li>
                                                <li>
                                                    <h4>Size</h4>
                                                    <span>S, M, L, XL</span>
                                                </li>
                                                <li>
                                                    <h4>Model</h4>
                                                    <span>Model </span>
                                                </li>
                                                <li>
                                                    <h4>Shipping</h4>
                                                    <span>Standard shipping: $5,95</span>
                                                </li>
                                                <li>
                                                    <h4>Care Info</h4>
                                                    <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                                </li>
                                                <li>
                                                    <h4>Brand</h4>
                                                    <span>Kazen</span>
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

    </main>

@endsection
