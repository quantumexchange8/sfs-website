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
    <section class="page-title centred" style="background-image: url(/images/background/page-title-3.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>What We Do</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- service-style-three -->
    <section class="service-style-three service-page-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-5.jpg" alt="">
                                <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="financial-analysis.html">Finance Consulting</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-6.jpg" alt="">
                                <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="taxation-planning.html">Tax Management</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-7.jpg" alt="">
                                <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="investment-trading.html">Economic Planning</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-8.jpg" alt="">
                                <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="financial-analysis.html">Strategy Thinking</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="financial-analysis.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-9.jpg" alt="">
                                <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="taxation-planning.html">Market Analysis</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="taxation-planning.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="/images/service/service-10.jpg" alt="">
                                <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="investment-trading.html">Content Optimize</a></h3>
                                <p>Acepteur sintas haecat sed non dui proident sunt culpa ipsum ...</p>
                                <div class="link"><a href="investment-trading.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-three end -->


    <!-- contact-section -->
    <section class="contact-section service-page-2" style="background-image: url(/images/background/contact-2.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 content-column">
                    <div id="content_block_nine">
                        <div class="content-box">
                            <div class="sec-title style-three left light">
                                <h5>focus on work</h5>
                                <h2>Let's Talk About Growing Your Business Always...</h2>
                            </div>
                            <div class="text">
                                <p>Boluptatem sequi nesciunt neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipiscivelits.</p>
                            </div>
                            <div class="form-inner">
                                <form action="contact.html" method="post">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn style-three">send message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- pricing-section -->
    <section class="pricing-section service-page-2">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>We make it happen</h5>
                <h2>Our Pricing Plans</h2>
                <p>Tempor incididunt ut labore et dolore magna aliquat enim veniam quis nostrud exercitation ullamco laboris nis aliquip consequat duis.</p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Small Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$149</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Global Relations</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix"> 
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li><del>Sales Operations</del></li>
                                    <li><del>Auto Intelligence</del></li>
                                    <li><del>24/7 Support</del></li>
                                    <li><del>Technology Services</del></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one active-block">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Smart Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$299</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Financial Analysis</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix"> 
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li>Sales Operations</li>
                                    <li>Auto Intelligence</li>
                                    <li><del>24/7 Support</del></li>
                                    <li><del>Technology Services</del></li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                    <div class="pricing-block-one">
                        <div class="pricing-table">
                            <div class="table-header">
                                <h3>Super Plan</h3>
                                <div class="price-box">
                                    <span>recommended</span>
                                    <h2>$549</h2>
                                    <p>/ Month</p>
                                </div>
                                <span class="text">This Plan Includes Free Consultancy</span>
                            </div>
                            <div class="table-content">
                                <ul class="clearfix"> 
                                    <li>All Financial Tasks</li>
                                    <li>Economic Market Survey</li>
                                    <li>Sales Operations</li>
                                    <li>Auto Intelligence</li>
                                    <li>24/7 Support</li>
                                    <li>Technology Services</li>
                                </ul>
                            </div>
                            <div class="table-footer">
                                <a href="index-3.html">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


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


    <!-- fun-fact -->
    <section class="fun-fact centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="254">0</span>
                        </div>
                        <p>Expert Consultants</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="930">0</span>
                        </div>
                        <p>Our Trusted Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="826">0</span>
                        </div>
                        <p>Orders in Queue</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="720">0</span>
                        </div>
                        <p>Projects Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-fact end -->

    @include('footer')
    
    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="upper-box">
                            <div class="logo">
                                <a href="index.html"><img src="/images/sidebar-logo.png" alt="" /></a>
                            </div>
                            <div class="text">
                                <p>Exercitation ullamco laboris nis aliquip sed conseqrure dolorn repreh deris ptate velit ecepteur duis.</p>
                            </div>
                        </div>
                        <div class="side-menu-box">
                            <div class="side-menu">
                                <nav class="menu-box">
                                    <div class="menu-outer">
                                        
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="info-box">
                            <h3>Get in touch</h3>
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ</li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                <li><i class="fas fa-headphones-alt"></i><a href="tel:101005200369">+1  0100 5200 369</a></li>
                                <li><i class="far fa-clock"></i>Monday to Friday: 9am - 6pm</li>
                            </ul>
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                    <button type="submit" class="theme-btn style-one">subscribe now</button>
                                </div>
                            </form>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


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

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>

