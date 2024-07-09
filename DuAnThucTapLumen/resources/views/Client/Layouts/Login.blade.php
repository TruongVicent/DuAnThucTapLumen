@extends('index')
@section('main')
    <!-- start new-product-section -->
    <section class="new-product-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Người dùng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    
                    <!------ Include the above in your HEAD tag ---------->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-login">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <a href="#" class="active btn btn-primary" id="login-form-link">Login</a>
                                            </div>
                                            <div class="col-xs-6">
                                                <a href="#" class="btn btn-primary" id="register-form-link">Register</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="login-form" action="{{url('/login')}}"
                                                    method="POST" role="form" style="display: block;">
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" tabindex="1"
                                                            class="form-control" placeholder="Email Address" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" tabindex="2"
                                                            class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <button type="submit" name="login-submit" id="login-submit"
                                                                    tabindex="4" class="form-control btn btn-primary"
                                                                >Gửi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                                <form id="register-form" action="{{url('/register')}}"
                                                    method="POST" role="form" style="display: none;">
                                                    <div class="form-group">
                                                        <input type="text" name="name" id="username" tabindex="1"
                                                            class="form-control" placeholder="Fullname" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" id="email" tabindex="1"
                                                            class="form-control" placeholder="Email Address" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" id="password" tabindex="2"
                                                            class="form-control" placeholder="Password">
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <input type="password" name="confirm-password"
                                                            id="confirm-password" tabindex="2" class="form-control"
                                                            placeholder="confirm Password">
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-sm-offset-3">
                                                                <button type="submit" name="register-submit"
                                                                    id="register-submit" tabindex="4"
                                                                    class="form-control btn btn-primary"
                                                                >Gửi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end new-product-section -->
@endsection
