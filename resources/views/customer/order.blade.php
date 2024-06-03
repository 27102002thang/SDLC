@extends('customer.index')

@section('content')


    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif


    <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
        <div class="breadcrumb__thumb" data-background="{{asset('assets/imgs/bg/breadcrumb-bg-furniture.jpg')}}"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper text-center">
                        <h2 class="breadcrumb__title">Thuê xe</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="/customer/index">Home</a></span></li>
                                    <li><span>Thuê xe</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="bd-product__area section-space-medium text-center">Thuê xe</h4>


    <div class="product__details-area section-space-medium">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-lg-7 ">
                    <form action="{{ route('saveorder') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Tên:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Ngày bắt đầu:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="end_date">Ngày kết thúc:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Đặt ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
