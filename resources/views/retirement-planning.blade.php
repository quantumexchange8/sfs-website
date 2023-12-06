@include('master')

<!-- page wrapper -->

<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
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
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
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
            <div class="nav-logo"><a href="index.html"><img src="/images/mobile-logo.png" alt="" title=""></a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
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
    <section class="page-title centred" style="background-image: url(/images/background/page-title-4.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Retirement Planning</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                    <li>Full Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- service-details -->
    <section class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-style-one">
                            <figure class="image-box"><img src="/images/service/service-15.jpg" alt=""></figure>
                            <div class="sec-title left">
                                <h5>Best services SFS</h5>
                                <h2>Cultivating Future Financial Security through Expert Collaborations</h2>
                            </div>
                            <div class="text">
                                <p>
                                    Retirement planning shapes a secure and fulfilling retirement by meticulously
                                    strategizing financial goals and tailored investment approaches. It's not just about
                                    accumulating wealth; it's a roadmap toward financial independence and a comfortable
                                    post-work life.</p>
                                <p>Crafting a retirement plan ensures a smooth transition to a fulfilling retirement by
                                    mitigating financial risks and optimizing savings. It's about envisioning goals,
                                    safeguarding financial well-being, and embracing new opportunities beyond work life.
                                </p>
                            </div>
                            <ul class="list-item clearfix">
                                <li>Financial Goal Setting</li>
                                <li>Investment Strategy</li>
                                <li>Income Sources and Streams</li>
                                <li>Risk Management and Contingency Planning</li>
                            </ul>
                        </div>
                        <div class="content-style-two">
                            <div class="image-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="/images/service/service-12.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="/images/service/service-13.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <p>Exercise labor is neither pain nor pleasure. There is no one who loves or pursues or
                                    desires to obtain pain of itself, because it is pain, but because occasionally
                                    circumstances occur in which toil and pain can procure him some great pleasure. To
                                    take a trivial example, which of us ever undertakes laborious physical exercise,
                                    except to obtain some advantage from it? But who has any right to find fault with a
                                    man who chooses to enjoy a pleasure that has no annoying consequences, or one who
                                    avoids a pain that produces no resultant pleasure?
                                </p>
                            </div>
                            <div id="content_block_two">
                                <div class="content-box">
                                    <div class="inner-box clearfix">
                                        <div class="single-progress-box">
                                            <div class="box clearfix">
                                                <div class="piechart" data-fg-color="#204669" data-value=".75">
                                                    <span>.75</span>
                                                </div>
                                                <div class="text">
                                                    <h5>Global Flexibility Investment</h5>
                                                    <h3>Upto 75% More Asests</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-progress-box">
                                            <div class="box clearfix">
                                                <div class="piechart" data-fg-color="#da2c46" data-value=".25">
                                                    <span>.25</span>
                                                </div>
                                                <div class="text">
                                                    <h5>Security Financial Solutions</h5>
                                                    <h3>Upto 25% More Asests</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-style-three">
                            <div id="content_block_one">
                                <div class="content-box">
                                    <div class="inner-box">
                                        <div class="single-item">
                                            <div class="icon-box">
                                                <span class="bg-box"></span>
                                                <i class="flaticon-computer-1"></i>
                                            </div>
                                            <h4><a href="index.html">Support On Raising Funds</a></h4>
                                            <p>Fostering support for fundraising requires a clear vision, strategic
                                                outreach, and impactful storytelling.
                                            </p>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-box">
                                                <span class="bg-box"></span>
                                                <i class="flaticon-browser-1"></i>
                                            </div>
                                            <h4><a href="index.html">Outsourced Consulting Business</a></h4>
                                            <p>Success in an outsourced consulting business thrives on expertise, client
                                                focus, and innovative solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar-categories">
                            <ul class="categories-list clearfix">
                                <li><a href="wealth-management.html">Wealth Management</a></li>
                                <li><a href="retirement-planning.html" class="active">Retirement Planning</a></li>
                                <li><a href="real-estate.html">Real Estate</a></li>
                                <li><a href="hedge-funds.html">Hedge Funds</a></li>
                                <li><a href="private-equity.html">Private Equity</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-testimonial">
                            <div class="quote-box"><i class="fas fa-quote-right"></i></div>
                            <div class="sidebar-carousel owl-carousel owl-theme owl-nav-none">
                                <div class="content-box">
                                    <div class="text">
                                        <p>Experienced experts in wealth management, skilled in personalized financial
                                            planning and investment strategies.</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="/images/resource/testimonial-9.png" alt="">
                                        </figure>
                                        <h6>Willson Thomas</h6>
                                        <span class="designation">florida, usa</span>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="text">
                                        <p>Experienced experts in wealth management, skilled in personalized financial
                                            planning and investment strategies.</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="/images/resource/testimonial-9.png" alt="">
                                        </figure>
                                        <h6>Willson Thomas</h6>
                                        <span class="designation">florida, usa</span>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="text">
                                        <p>Experienced experts in wealth management, skilled in personalized financial
                                            planning and investment strategies.</p>
                                    </div>
                                    <div class="author-info">
                                        <figure class="image-box"><img src="/images/resource/testimonial-9.png" alt="">
                                        </figure>
                                        <h6>Willson Thomas</h6>
                                        <span class="designation">florida, usa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-info">
                            <div class="sidebar-title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="sidebar-content">
                                <p>We're eager to assist you promptly with your planning needs.</p>
                                <ul class="info-list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ</li>
                                    <li><i class="fas fa-envelope"></i><a
                                            href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                    <li><i class="fas fa-headphones"></i><a href="tel:101005200369">+1 0100 5200 369</a>
                                    </li>
                                </ul>
                                <ul class="social-links clearfix">
                                    <li><a href="financial-analysis.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="financial-analysis.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="financial-analysis.html"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="financial-analysis.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="financial-analysis.html"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="download-option">
                            <div class="sidebar-title">
                                <h3>Downloads</h3>
                            </div>
                            <ul class="download-file clearfix">
                                <li><a href="financial-analysis.html"><i class="fas fa-file-pdf"></i>Presentation
                                        PDF</a></li>
                                <li><a href="financial-analysis.html"><i class="fas fa-file"></i>Brochure DOC</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

    @include('footer')

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>

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