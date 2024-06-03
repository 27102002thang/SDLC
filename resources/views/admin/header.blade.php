
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/admin/home">ADMIN</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                   aria-describedby="btnNavbarSearch"/>
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >

        <form method="post" action="{{ route('logout') }}" >
            @csrf
            <button type="submit" class="btn btn" style="color: white">Logout</button>
        </form>
    </div>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="/admin/dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Quản lí</div>
                    <a class="nav-link collapsed" href="/admin/product" >
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Xe Oto
                        <div class="sb-sidenav-collapse-arrow"></div>
                    </a>
                    {{--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"--}}
                    {{--                         data-bs-parent="#sidenavAccordion">--}}
                    {{--                        <nav class="sb-sidenav-menu-nested nav">--}}
                    {{--                            <a class="nav-link" href="layout-static.html">Static Navigation</a>--}}
                    {{--                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>--}}
                    {{--                        </nav>--}}
                    {{--                    </div>--}}
                    <a class="nav-link collapsed" href="/admin/account" >
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Tài Khoản
                        <div class="sb-sidenav-collapse-arrow"></div>
                    </a>
                    <a class="nav-link collapsed" href="/admin/contract" >
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Xác Nhận Cho Thuê
                        <div class="sb-sidenav-collapse-arrow"></div>
                    </a>
                    <a class="nav-link collapsed" href="/admin/orderDetail" >
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Chi tiết đơn hàng
                        <div class="sb-sidenav-collapse-arrow"></div>
                    </a>

                    <a class="nav-link" target="_blank" href="/customer/index">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Trang chủ người dùng
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <p class="me-3 mb-0">
                    {{ Auth::user()->name }}
                </p>
            </div>
        </nav>
    </div>
</div>
