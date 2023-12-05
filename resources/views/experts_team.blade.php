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
                <h1>Experts Team</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Experts Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- team-section -->
    <section class="team-section team-page">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
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
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
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
        </div>
    </section>
    <!-- team-section end -->


    <!-- team-style-three -->
    <section class="team-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="bg-box-1"></div>
                                <div class="bg-box-2"></div>
                                <img src="/images/team/team-8.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="team.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team.html">Adrian James Henry</a></h3>
                                <span class="designation">Founder CEO</span>
                                <p>Ad mini veniam quis nostrud exercitas ullamco ipsum sed ut perspiciatis unde.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="bg-box-1"></div>
                                <div class="bg-box-2"></div>
                                <img src="/images/team/team-9.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="team.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team.html">Maya Ben Charlotte</a></h3>
                                <span class="designation">Marketing Supervisor</span>
                                <p>Ad mini veniam quis nostrud exercitas ullamco ipsum sed ut perspiciatis unde.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                    <div class="team-block-three">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="bg-box-1"></div>
                                <div class="bg-box-2"></div>
                                <img src="/images/team/team-10.jpg" alt="">
                                <ul class="social-links clearfix">
                                    <li><a href="team.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="team.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figure>
                            <div class="lower-content">
                                <h3><a href="team.html">Jordan Smith Connor</a></h3>
                                <span class="designation">Financial Expert</span>
                                <p>Ad mini veniam quis nostrud exercitas ullamco ipsum sed ut perspiciatis unde.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-style-three end -->

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
