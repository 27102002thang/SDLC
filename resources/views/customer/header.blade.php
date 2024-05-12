
<header>
    <div class="header">
        <div class="header-top-area grocery__top-header">
            <div class="header-layout-4">
                <div class="header-to-main d-none d-sm-flex">
                    <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                    </div>
                </div>
            </div>
        </div>
        <div class="header-layout-4 header-bottom">
            <div id="header-sticky" class="header-4">
                <div class="mega-menu-wrapper">
                    <div class="header-main-4">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="/customer/index">
                                    <div style="width: 100px; height: 100px"><img src="{{ asset('image/cargo.jpg') }}"
                                                                                  alt="logo not found"></div>
                                </a>
                            </div>
                            <div class="mean__menu-wrapper furniture__menu d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown">
                                                <a href="/customer/index">Home</a>
                                                <ul class="submenu">
                                                    <li><a href="pharmacy.html">Pharmacy Store</a></li>
                                                    <li><a href="index.html">Furniture Store</a></li>
                                                    <li><a href="grocery.html">Grocery Store</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="nav-item has-dropdown">
                                                <a href="{{ url('/customer/category')}}">Thể Loại</a>
                                                <ul class="submenu">
                                                    @foreach($categories as $category)
                                                        <li><a href="/customer/category/{{$category->category_id}}">{{ $category->category_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="about.html">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="store.html">Find a Store</a></li>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="error.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="blog.html">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog Default</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="header-right d-inline-flex align-items-center justify-content-end">
                            <div class="header-search d-none d-xxl-block">
                                <form action="#">
                                    <input type="search" name="keyword" class="form-control form-control-dark text-dark" placeholder="Search..."
                                           aria-label="Search" >
                                    <button type="submit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.4443 13.4445L16.9999 17" stroke="white" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                            <path
                                                d="M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z"
                                                stroke="white" stroke-width="2"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div class="header-action-item">
                                <a href="cart.html" class="header-action-btn cartmini-open-btn">
                                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.0625 10.6C14.0625 12.5883 12.4676 14.2 10.5 14.2C8.53243 14.2 6.9375 12.5883 6.9375 10.6M1 5.8H20M1 5.8V13C1 20.6402 2.33946 22 10.5 22C18.6605 22 20 20.6402 20 13V5.8M1 5.8L2.71856 2.32668C3.12087 1.5136 3.94324 1 4.84283 1H16.1571C17.0568 1 17.8791 1.5136 18.2814 2.32668L20 5.8"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="d-flex align-items-center header-action-item">
                                <p class="me-3 mb-0">
                                    {{ Auth::user()->name }}
                                </p>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-dark">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</header>
