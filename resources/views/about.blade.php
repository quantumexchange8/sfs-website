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
    <section class="page-title centred" style="background-image: url(/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- info-section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="year-box">
                            <figure class="image-box"><img src="/images/icons/year-icon.png" alt=""></figure>
                            <h2>SFS</h2>
                            <h3>SIXTY FOURTH SECURITIES</h3>
                        </div>
                        <div class="title">
                            <h2>Testament To The Extraordinary Potential <span>—</span> of Collaboration, Innovation, and Expertise</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>Greetings from Sixty-Fourth Securities, where we are redefining the paradigm of the typical
                            financial institution. We are a group of eminent financial experts, all of whom are
                            recognized as leaders in their fields. Our unique combination of artificial intelligence
                            (AI) and human intelligence sets us apart and drives our incredibly sophisticated trading
                            techniques.</p>
                        <a href="index.html"><i class="fas fa-arrow-right"></i><span>Who We Are</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info-section end -->


    <!-- about-style-two -->
    <section class="about-style-two about-page-1 bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title right">
                                <h5>About SFS</h5>
                                <h2>AI-Powered Digital Future Planning Based on Human Insight<</h2>
                            </div>
                            <div class="text">
                                <p>Sixty-fourth Securities uses human insight and artificial intelligence to inform their trading strategies. Since
                                    their establishment in 2022, they have overseen assets valued over $5 billion, demonstrating their
                                    proficiency in foreign exchange, fund management, derivatives trading, and brokering.</p>
                            </div>
                            <div class="tabs-box">
                                <div class="tab-btn-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li class="tab-btn active-btn" data-tab="#tab-1">Our Mission</li>
                                        <li class="tab-btn" data-tab="#tab-2">Our Journey</li>
                                        <li class="tab-btn" data-tab="#tab-3">Our Approach</li>
                                    </ul>
                                </div>
                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="content-inner">
                                            <p>We combine AI and human expertise to craft pioneering trading strategies. Our goal is to optimize investments and
                                                empower client success in dynamic markets. Our mission thrives on blending technology and human insight for
                                                financial growth.</p>
                                            <a href="about-1.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-2">
                                        <div class="content-inner">
                                            <p>After meticulous data curation and successful market trading, we launched Sixty-Fourth Securities in September 2023
                                                following a decisive 3-month feasibility study. Our journey blends AI and human expertise, yet your dreams drive our
                                                decisions.</p>
                                            <a href="about-1.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a>
                                        </div>
                                    </div>
                                    <div class="tab" id="tab-3">
                                        <div class="content-inner">
                                            <p>Our client-focused approach drives our success, managing assets exceeding USD $5 billion. By leveraging AI and human
                                                interaction, we swiftly respond to market dynamics, much like the thrill of making crucial moves in high-stakes
                                                scenarios. Your aspirations fuel our mission, inspiring our dedication to your success daily.</p>
                                            <a href="about-1.html"><i class="fas fa-arrow-right"></i><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="image_block_two">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url(/images/shape/shape-25.png);"></div>
                            <figure class="image"><img src="/images/resource/about-2.jpg" alt=""></figure>
                            <div class="content-box">
                                <i class="fas fa-headphones-alt"></i>
                                <h4>Save Money, Save Life!</h4>
                                <h5>Any questions? Call <a href="tel:01005200369">0100 5200 369</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


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
    <section class="funfact-style-four about-page-1 centred">
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


    <!-- video-section -->
    <section class="video-section about-page-1 centred" style="background-image: url(/images/background/video-bg.jpg);">
        <div class="auto-container">
            <div class="inner-box">
                <div class="video-btn">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                </div>
                <h2>Unleashing Potential for Vibrant Performance</h2>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- team-section -->
    <section class="team-section about-page-1">
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 title-column">
                        <div class="sec-title right">
                            <h5>Professionals team</h5>
                            <h2>Our Expert Team</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <p>Our team of experienced experts is committed to aiding your success in attaining your wealth goals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/team/team-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Christina Roy</a></h3>
                                <span class="designation">Founder CEO</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/team/team-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Paul Wilson</a></h3>
                                <span class="designation">Senior Manager</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/team/team-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Amanda Tim</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/team/team-4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                            </div>
                            <div class="ovellay-box">
                                <h3><a href="index-2.html">Jasmine Olgin</a></h3>
                                <span class="designation">Insurance Agent</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


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

<!-- main-js -->
<script src="/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>