    <!-- start site-footer -->
    <footer class="site-footer">
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget about-widget">
                            <div class="logo widget-title">
                                <img src="assets/images/logo.png" alt>
                            </div>
                            <p>Build and Earn with your online store with lots of cool and exclusive features </p>
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-6">
                        <div class="widget link-widget resource-widget">
                            <div class="widget-title">
                                <h3>Resources</h3>
                            </div>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & License</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-2 col-md-3 col-sm-6">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Help Link</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                        <div class="widget market-widget service-link-widget">
                            <div class="widget-title">
                                <h3>Market Earning</h3>
                            </div>
                            <p>online store with lots of cool and exclusive features Edefy</p>
                            <div class="sold-earning">
                                <div>
                                    <p>Item Sold</p>
                                    <h4>32567</h4>
                                </div>
                                <div>
                                    <p>Total Earning</p>
                                    <h4>603598</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="separator"></div>
                    <div class="col col-xs-12">
                        <p class="copyright">&copy; 2019 Edefy. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end site-footer -->

</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="{{ url('../assets/js/jquery.min.js') }}"></script>
<script src="{{ url('../assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins for this template -->
<script src="{{ url('../assets/js/jquery-plugin-collection.js') }}"></script>

<!-- Custom script for this template -->
<script src="{{ url('../assets/js/script.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var loginForm = document.getElementById('login-form');
        var registerForm = document.getElementById('register-form');
        var loginFormLink = document.getElementById('login-form-link');
        var registerFormLink = document.getElementById('register-form-link');

        loginFormLink.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            loginFormLink.classList.add('active');
            registerFormLink.classList.remove('active');
        });

        registerFormLink.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            registerFormLink.classList.add('active');
            loginFormLink.classList.remove('active');
        });
    });
    
</script>
</body>

<!-- Mirrored from wpocean.com/html/tf/edefy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 07:28:24 GMT -->
</html>
