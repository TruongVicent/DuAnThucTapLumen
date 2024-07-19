@extends('index')
@section('main')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Danh sách giao diện</h2>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start category-page-section -->
    <section class="category-page-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <div class="category-sidebar">
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">WordPress <span>25</span></a></li>
                                <li><a href="#">Graphic Item <span>34</span></a></li>
                                <li><a href="#">HTML Template <span>50</span></a></li>
                                <li><a href="#">Psd Template <span>46</span></a></li>
                                <li><a href="#">Plugins <span>15</span></a></li>
                                <li><a href="#">Audio <span>48</span></a></li>
                                <li><a href="#">Video <span>65</span></a></li>
                                <li><a href="#">Graphic Item <span>36</span></a></li>
                                <li><a href="#">Photos <span>125</span></a></li>
                            </ul>
                        </div>
                        <div class="widget tag-widget">
                            <ul>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Recent Products</a></li>
                                <li><a href="#">Popular Products</a></li>
                                <li><a href="#">Trending Products</a></li>
                                <li><a href="#">Price (Low to High)</a></li>
                                <li><a href="#">Price (High to Low)</a></li>
                                <li><a href="#">Title (A - Z)</a></li>
                                <li><a href="#">Title (Z - A)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-md-8">
                    <div class="all-products">
                        <div class="product-grids clearfix">
                            @foreach ($product as $pro)
                                <div class="grid">
                                    <div class="product-img-tag">
                                        <img src="{{ $pro->thumbnail }}" alt="nam">
                                        <div class="badge">Trending</div>
                                    </div>
                                    <div class="product-details-wrap">
                                        <div class="product-details">
                                            <h4><a href="#">{{ $pro->name }}</a></h4>
                                        </div>
                                        <div class="product-footer">
                                            <div class="price">
                                                <h5>{{ $pro->price }}</h5>
                                            </div>
                                            <div class="live-preview-cart">
                                                <div class="live-preview"><a href="#">Xem thử</a></div>
                                                <div class="cart">
                                                    <form action="{{url('/addcart')}}" method="post" class="d-flex justify-content-center">
                                                        <input type="hidden" name="theme_name" id="id" value="{{ $pro->name }}">
                                                        <input type="hidden" name="price" value="{{ $pro->price }}">
                                                        <input type="hidden" name="thumbnail" id="id" value="{{ $pro->thumbnail }}">
                                                        <input type="hidden" name="cart_id" id="id" >
                                                        <input type="hidden" name="theme_id" id="id" value="{{ $pro->id }}">
                                                        <button class="btn" type="submit"  onclick="return confirm('Thêm Thành Công')">Thêm Vào Giỏ</button>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
@endsection
