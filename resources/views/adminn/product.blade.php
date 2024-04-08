<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Dashboard - SB Admin</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
            crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">DASBOARD ADMIN</a>
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
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><p class="me-3 mb-0">
                        {{ Auth::user()->name }}
                    </p></li>
                <li>
                    <hr class="dropdown-divider"/>
                </li>
                <li>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="/admin/product" >
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Product
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
{{--                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"--}}
{{--                         data-bs-parent="#sidenavAccordion">--}}
{{--                        <nav class="sb-sidenav-menu-nested nav">--}}
{{--                            <a class="nav-link" href="layout-static.html">Static Navigation</a>--}}
{{--                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
                    <a class="nav-link collapsed" href="/account" >
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Account
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
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
    <div id="layoutSidenav_content">
        <div class="container">
            <br>
            <h3 style="text-align: center;color: #fd7e14">Danh sách sản phẩm</h3>
            <button class="btn btn-primary"><a href="/productAdd" class="text-light">Add</a></button>
            <table class="table ">
                <tr>
                    <td>ID</td>
                    <td>Sản phẩm</td>
                    <td>Giá tiền</td>
                    <td>Loại nhiên liệu</td>
                    <td>Số chỗ ngồi</td>
                    <td></td>
                    <td></td>
                </tr>
                <hr>
                @foreach($listProduct as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="/image/{{$product->image}}"
                                 style="width:120px;height: 80px"/><br> {{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->fuel_type}}</td>
                        {{--                <td><img src="{{ Storage::url($user->image) }}" alt="Avatar" /></td>--}}
                        <td>{{$product->seats}}</td>
                        <td><a href="/product_delete/{{$product->id}}"><i class="fa-solid fa-trash"></i></a></td>
                        <td><a href="/product_update/{{$product->id}}"><i class="fa-solid fa-wrench"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
{{--data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth--}}
