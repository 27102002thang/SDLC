@extends('customer.index')

@section('content')
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
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

    <h4 class="bd-product__area section-space-medium text-center">Điền thông tin liên hệ</h4>


        <div class="container ">
                    <form style="max-width: 750px;
                                  margin: 40px auto;
                                  padding: 20px;
                                  border: 1px solid #ccc;
                                  border-radius: 10px;
                                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"
                          action="{{ route('saveorder') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" class="form-control" id="name" name="name" required><br>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required><br>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required><br>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ:</label>
                            <input type="text" class="form-control" id="address" name="address" required><br>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Ngày bắt đầu:</label>
                            <input type="date" id="start_date" name="start_date" required style="width: 550px; height: 50px; font-size: 16px;"><br>
                        </div>
                        <div class="form-group">
                            <label for="end_date">Ngày kết thúc:</label>
                            <input type="date" id="end_date" name="end_date" required style="width: 550px; height: 50px; font-size: 16px;"><br>
                        </div>
                        <div class="form-group">
                            <label for="note">Ghi Chú:</label>
                            <input type="text" class="form-control" id="note" name="note" required><br>
                        </div>
                        <input style="background-color: #4CAF50;
                               color: #fff;
                               padding: 10px 20px;
                               border: none;
                               border-radius: 10px;
                               cursor: pointer;
                               background-color: #3e8e41;
                               "
                                type="submit" value="Đặt ngay">
                    </form>
        </div>


@endsection
