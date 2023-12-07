@include('master')

<!-- page wrapper -->
<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Finance</a></li>
                    <li><a href="index.html">Idea</a></li>
                    <li><a href="index.html">Service</a></li>
                    <li><a href="index.html">Growth</a></li>
                    <li><a href="index.html">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


    @include('header')

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="/images/mobile-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/images/background/page-title-5.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Get In Touch</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-information -->
    <section class="contact-information centred">
        <div class="auto-container">
            <div class="sec-title right">
                <h5>focused with work</h5>
                <h2>We're Global Management Consulting Firm <br />To Help With Financial Business</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-map"></i></div>
                            <h3>Office Location</h3>
                            <p>838 Andy Street Lane, Madison<br />New Jersy 08003 - USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fas fa-phone"></i></div>
                            <h3>Calling Support</h3>
                            <p>24/7 Line  <a href="tel:101005200369">+1 0100 5200 369</a></p>
                            <p>Toll Free  <a href="tel:080098765">0800 98765</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                            <h3>Email Information</h3>
                            <p><a href="mailto:support@my-domain.com">support@my-domain.com</a><br /><a href="mailto:reply@example.org">reply@example.org</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-information end -->


    <!-- world-cyber -->
    <section class="world-cyber bg-color-1">
        <div class="pattern-layer" style="background-image: url(/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Worldwide Reputable, Reliable & Trustworthy</h5>
                <h2>SFS's Around the World</h2>
            </div>
            <div class="office-location">
                <div class="location-area">
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                    <div class="location-box">
                        <div class="address-box">
                            <figure class="icon-box"><img src="/images/icons/icon-2.png" alt=""></figure>
                            <p>Serve you to reach best profits and goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- world-cyber end -->


    <!-- funfact-style-four -->
    <section class="funfact-style-four contact-page centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="10">0</span>k
                        </div>
                        <h3>Global <br />Customers</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="5">0</span>k+
                        </div>
                        <h3>Projects <br />Completed</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="370">0</span>
                        </div>
                        <h3>Expert <br />Employees</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-four wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="75">0</span>+
                        </div>
                        <h3>Countries <br />Served</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-four -->


    <!-- contact-style-two -->
    <section class="contact-style-two" style="background-image: url(/images/background/contact-3.jpg);">
        <div class="auto-container">
            <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
                <div class="sec-title left light">
                    <h5>try our service</h5>
                    <h2>Drop Us a Line</h2>
                    <p>Plan, research, choose wisely for a prosperous investment journey.</p>
                </div>
                <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" type="submit" name="submit-form">request service</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->

    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-1.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-2.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-3.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-4.png" alt=""></a></figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-5.png" alt=""></a></figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->

    @include('footer')
    
    @include('sidebar')

<!-- jequery plugins -->
<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/validation.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/jquery.countTo.js"></script>
<script src="/js/scrollbar.js"></script>
<script src="/js/nav-tool.js"></script>
<script src="/js/TweenMax.min.js"></script>
<script src="/js/circle-progress.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="/js/gmaps.js"></script>
<script src="/js/map-helper.js"></script>

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
