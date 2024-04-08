<header class="p-3 bg-secondary text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <!-- Thay đổi đường dẫn tới ảnh logo -->
                <img src="{{ asset('image/111.jpg') }}" style="width: 50px;" alt="logo">
                <span class="ms-2 fs-4">CAR GO</span>
            </a>

            <ul class="nav d-flex justify-content-center justify-content-lg-start">
                <li class="nav-item"><a href="{{ url('/customer/index') }}" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Thể Loại</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Thương hiệu</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Liên hệ</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Giỏ hàng</a></li>
            </ul>

            <form class="d-flex flex-grow-1 ms-lg-3 text-dark">
                <input type="search" name="keyword" class="form-control form-control-dark " placeholder="Search..."
                       aria-label="Search" >
            </form>

            <div class="d-flex align-items-center"style="float: right">
                <p class="me-3 mb-0">
                    {{ Auth::user()->name }}
                </p>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </div>
</header>
