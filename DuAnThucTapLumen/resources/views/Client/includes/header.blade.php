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
                        <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/')}}">Home</a>
                            </li>
                            <li><a href="{{ url('/about')}}">About us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/product-detail')}}">Product single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/product')}}">Products</a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/blog')}}">Blog</a>
                            </li>
                            <li><a href="{{ url('/contact')}}">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="cart-search-contact">
                        <div class="header-search-form-wrapper">
                            <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                            <div class="header-search-form">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mini-cart">
                            <button class="cart-toggle-btn"> <i class="fi flaticon-bag"></i> <span class="cart-count">02</span></button>
                            <div class="mini-cart-content">
                                <div class="mini-cart-items">
                                    <div class="mini-cart-item clearfix">
                                        <div class="mini-cart-item-image">
                                            <a href="#"><img src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                        </div>
                                        <div class="mini-cart-item-des">
                                            <a href="#">Brown Leather Boots</a>
                                            <span class="mini-cart-item-price">$20.15</span>
                                            <span class="mini-cart-item-quantity">x 1</span>
                                        </div>
                                    </div>
                                    <div class="mini-cart-item clearfix">
                                        <div class="mini-cart-item-image">
                                            <a href="#"><img src="assets/images/shop/mini-cart/img-2.jpg" alt></a>
                                        </div>
                                        <div class="mini-cart-item-des">
                                            <a href="#">Headphones Pryma</a>
                                            <span class="mini-cart-item-price">$13.25</span>
                                            <span class="mini-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-action clearfix">
                                    <span class="mini-checkout-price">$215.14</span>
                                    <a href="#" class="view-cart-btn">View Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="btns">
                            <a href="#" class="theme-btn">My account</a>
                        </div>
                    </div>                    
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->
