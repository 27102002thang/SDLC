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
            width: 100px; /* Kích thước của logo */
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
<body style="background-image:url('https://www.dodge.com/content/dam/fca-brands/na/dodge/en_us/seo/musclecar/desktop/featurepanel/Feature-Panel-with-BG-2-Desktop.jpg.image.1440.jpg');
background-repeat: no-repeat; background-position: center; background-size:100% 100%
">

<div class="container">
    <div class="col-lg-5">
        <div class="card text-black">
            <div class="col-lg-12">
                <div class="card-content p-md-4">
                    <div class="text-center">
                        <img src="{{ asset('image/cargo.jpg') }}" class="logo-img" alt="logo">
                        <h4 style="color: #fd7e14">Đăng ký tài khoản</h4>
                    </div>
                    <form method="POST" action="/saveRegister ">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit"  class="btn btn-primary"> Đăng ký </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>



