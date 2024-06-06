@extends('index')
@section('main')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start contact-info-section -->
    <section class="contact-info-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="contact-grids clearfix">
                        <div class="grid">
                            <h3>25 North Street,Dubai</h3>
                            <div class="icon-info">
                                <div class="icon">
                                    <i class="fi flaticon-internet"></i>
                                </div>
                                <p>Office Address</p>
                            </div>
                        </div>
                        <div class="grid">
                            <h3>info@edefytheme.com</h3>
                            <div class="icon-info">
                                <div class="icon">
                                    <i class="fi flaticon-mail"></i>
                                </div>
                                <p>Office Mail</p>
                            </div>
                        </div>
                        <div class="grid">
                            <h3>+91 256-987-239</h3>
                            <div class="icon-info">
                                <div class="icon">
                                    <i class="fi flaticon-support"></i>
                                </div>
                                <p>Office Phone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-info-section -->


    <!-- start contact-form-map -->
    <section class="contact-form-map section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6">
                    <div class="contact-form">
                        <h2>Get In Touch</h2>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="f_name" id="f_name"
                                    placeholder="First Name*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="l_name" id="l_name"
                                    placeholder="Last Name*">
                            </div>
                            <div class="clearfix">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject*">
                            </div>
                            <div>
                                <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn submit-btn">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-form-map -->


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
