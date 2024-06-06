@extends('index')
@section('main')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Blog</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start blog-pg-section -->
    <section class="blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="assets/images/blog/img-4.jpg" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="fi flaticon-calendar"></i> Sep 25,2019</a></li>
                                <li><a href="#"><i class="flaticon-heart-2"></i> 35</a></li>
                            </ul>
                            <h3><a href="#">How to estublish a team with a great way?</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web page
                                editors now.</p>
                            <a href="#" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-video">
                            <div class="entry-media video-holder">
                                <img src="assets/images/blog/img-5.jpg" alt>
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn"
                                    data-type="iframe">
                                    <i class="fi flaticon-play-button-2"></i>
                                </a>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="fi flaticon-calendar"></i> Sep 25,2019</a></li>
                                <li><a href="#"><i class="flaticon-heart-2"></i> 35</a></li>
                            </ul>
                            <h3><a href="#">Protecting your digital products</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web page
                                editors now.</p>
                            <a href="#" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-gallery">
                            <div class="entry-media post-slider">
                                <img src="assets/images/blog/img-6.jpg" alt>
                                <img src="assets/images/blog/img-4.jpg" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="fi flaticon-calendar"></i> Sep 25,2019</a></li>
                                <li><a href="#"><i class="flaticon-heart-2"></i> 35</a></li>
                            </ul>
                            <h3><a href="#">The definitive list of digital products you can sell</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web page
                                editors now.</p>
                            <a href="#" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-quote">
                            <h3><a href="#">Best Selling HTML Template</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using. </p>
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
                <div class="col col-md-4">
                    <div class="blog-sidebar">
                        <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Branding <span>25</span></a></li>
                                <li><a href="#">Wordpress <span>34</span></a></li>
                                <li><a href="#">Web Design Tricks and Tips <span>50</span></a></li>
                                <li><a href="#">Designer Themes<span>46</span></a></li>
                                <li><a href="#">General Topics <span>15</span></a></li>
                                <li><a href="#">Knowledgebase <span>65</span></a></li>
                                <li><a href="#">Inspiration <span>36</span></a></li>
                            </ul>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Recent posts</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/recent-posts/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">6 Ideas for how you can avoid telling lie</a></h4>
                                        <span class="date">22 Sep 2019</span>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/recent-posts/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">The definitive list of digital products you can sell</a></h4>
                                        <span class="date">22 Sep 2019</span>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="assets/images/recent-posts/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">The definitive list of digital products you can sell</a></h4>
                                        <span class="date">22 Sep 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget quote-widget">
                            <div class="quote">
                                <i class="fi flaticon-quote"></i>
                                <p>By integrating your entire application stack, from infrastructure and operations to
                                    ongoing maintenance and new development </p>
                            </div>
                            <div class="quoter">
                                <div class="img-holder">
                                    <img src="assets/images/blog/quoter.jpg" alt>
                                </div>
                                <h4>Jenefer Marvel</h4>
                                <p>CEO of Barbarah</p>
                            </div>
                        </div>
                        <div class="widget tag-widget">
                            <h3>Tags</h3>
                            <ul>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Theme Develop</a></li>
                                <li><a href="#">Plugin</a></li>
                                <li><a href="#">PDS Template</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-pg-section -->


    <!-- start news-letter-section -->
    <section class="news-letter-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="newsletter">
                        <h3>Follow us For ferther information</h3>
                        <div class="newsletter-form">
                            <form>
                                <div>
                                    <input type="text" placeholder="Enter Your Email" class="form-control">
                                    <button type="submit">Subscrib</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end news-letter-section -->
@endsection
