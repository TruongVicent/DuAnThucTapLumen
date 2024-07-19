<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/')}}
                        "><img src="assets/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/')}}">Trang chủ</a>
                            </li>
                            <li><a href="{{ url('/about')}}">Về chúng tôi</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Trang</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/product-detail')}}">Sản phẩm chi tiết</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/product')}}">Sản phẩm</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/blog')}}">Bài viết</a>
                            </li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="cart-search-contact ">
                        <div class="mini-cart">
                            <a href="{{ url('/cart/' . Auth::user()->id)}}" class="cart-toggle-btn"> <i class="fi flaticon-bag"></i></a>
                        </div>
                        <div class="btns ">
                            @if(Auth::check())
                            <p>Chào, <a href="{{ url('/profile') }}">{{Auth::user()->name}}</a></p>
                            <form action="{{ url('/logout') }}" method="post">
                                <button type="submit" class="text-danger theme-btn">Đăng xuất</button>
                            </form>
                            @else
                            <a href="{{ url('/signin') }}" class="theme-btn">Đăng nhập</a>
                            @endif
                        </div>
                    </div>                    
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
