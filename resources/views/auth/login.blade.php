<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #a0aec0; /* Màu nền */
        }
        .container {
            display: flex;
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: center; /* Căn giữa theo chiều dọc */
            height: 100vh; /* Chiều cao của container */
        }
        .card {
            border-radius: 20px; /* Độ cong viền của thẻ card */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Đổ bóng cho thẻ card */
        }
        .logo-img {
            width: 150px; /* Kích thước của logo */
        }
        .form-control {
            border-radius: 20px; /* Độ cong viền của input */
            padding: 14px; /* Khoảng cách giữa nội dung và viền */
            font-size: 16px; /* Cỡ chữ */
        }
        .form-label {
            color: #555; /* Màu chữ của label */
            font-size: 16px; /* Cỡ chữ của label */
            font-weight: bold; /* Đậm chữ của label */
            transition: 0.3s; /* Hiệu ứng chuyển đổi */
        }
        .form-control:focus + .form-label {
            color: #2980B9; /* Màu chữ của label khi focus */
            font-size: 14px; /* Cỡ chữ của label khi focus */
            transform: translateY(-20px); /* Dịch label lên trên khi focus */
        }
        .btn-login {
            border-radius: 20px; /* Độ cong viền của nút đăng nhập */
            padding: 14px; /* Khoảng cách giữa nội dung và viền của nút */
            font-size: 16px; /* Cỡ chữ của nút */
            background-color: #2980B9; /* Màu nền của nút */
            border: none; /* Không có viền */
            transition: 0.3s; /* Hiệu ứng chuyển đổi */
        }
        .btn-login:hover {
            background-color: #2471A3; /* Màu nền của nút khi hover */
        }
        .btn-create {
            border-radius: 20px; /* Độ cong viền của nút tạo mới */
            padding: 10px 24px; /* Khoảng cách giữa nội dung và viền của nút */
            font-size: 16px; /* Cỡ chữ của nút */
            color: #2980B9; /* Màu chữ của nút */
            border: 2px solid #2980B9; /* Viền của nút */
            transition: 0.3s; /* Hiệu ứng chuyển đổi */
        }
        .btn-create:hover {
            background-color: #2980B9; /* Màu nền của nút khi hover */
            color: #fff; /* Màu chữ của nút khi hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-lg-5">
        <div class="card text-black">
                <div class="col-lg-12">
                    <div class="card-content p-md-4">
                        <div class="text-center">
                            <img src="{{ asset('image/111.jpg') }}" class="logo-img" alt="logo">
                            <h4 class="mt-1 mb-4 pb-1 text-warning">Đăng nhập</h4>
                        </div>
                        <form method="post" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <input autocomplete="off" name="email" type="email" id="form2Example11" class="form-control"
                                       placeholder="Email address" required/>
                                <label class="form-label" for="form2Example11">Tên đăng nhập</label>
                            </div>
                            <div class="mb-3">
                                <input autocomplete="off" name="password" type="password" id="form2Example22" class="form-control" required/>
                                <label class="form-label" for="form2Example22">Mật khẩu</label>
                            </div>
                            <div class="text-center mb-4">
                                <button class="btn btn-login btn-block fa-lg mb-3" style="color: white" type="submit">Đăng nhập</button>
                                <a class="text-muted" href="#!">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <p class="mb-0">Bạn chưa có tài khoản?</p>
                                <button type="button" class="btn btn-create">Tạo mới</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
