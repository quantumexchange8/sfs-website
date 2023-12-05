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
    </div>
    <!-- End Mobile Menu -->

    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>FAQ</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Rows of FAQs-->
    <div class="row mt-60">
        <div class="col-12">
            <div class="faq-section">
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>Is GPI Consultants a registered company?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>Yes, GPI Consultants is a registered company.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>What steps do I need to take to join GPI Consultants?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>Simply complete our online application form and submit the required KYC papers. Alternately, you may contact us and we will assist you with the various procedures.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>How soon can I begin investing or trading with GPI Consultants?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>As soon as we have evaluated your investment requirements and received your KYC documentation, one of our specialists will initiate your journey immediately.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>Can I invest from anywhere in the world?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>Our network's worldwide reach is exceptional, so you are never limited no matter where you are in the world.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>What if I don't know much about the financial markets?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>Our expert team will guide you in every way possible to make you feel comfortable and understand everything you need to know about the investment or trade you will be making.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>Does GPI Consultants have an internship program?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>We hire a small number of interns each year, so if you have any questions about upcoming opportunities, please send us an email and a member of our staff will respond as soon as possible. We hire a small number of interns each year, so if you have any questions about upcoming opportunities, please send us an email and a member of our staff will respond as soon as possible.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h2 class="faq-question">
                        <span>Can I invest or trade using Cryptocurrency?</span>
                    </h2>
                    <div class="faq-answer">
                        <p>Here at GPI Consultants, we accept all major Cryptocurrencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of FAQs-->

    <!--FAQ contact-->
    <div class="row mt-60">
        <div class="col-12">
            <div class="hc-contact media">
                <div class="img">
                    <img src="https://gpiconsultants.com//img/media/contact.png" alt="">
                </div>
                <div class="content media-body">
                    <h2>Unable to Find Your Answer?</h2>
                    <a href="https://gpiconsultants.com/contactus" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" class="svg replaced-svg">
                            <path id="btn-contact" d="M9.9,20V17.778h8.8V9.889a7.7,7.7,0,1,0-15.4,0v6.778H2.2A2.218,2.218,0,0,1,0,14.444V12.222a2.19,2.19,0,0,1,1.1-1.911,9.907,9.907,0,1,1,19.8-.067,2.049,2.049,0,0,1,1.1,1.8V14.6a2.055,2.055,0,0,1-1.1,1.822v1.356A2.218,2.218,0,0,1,18.7,20Zm3.3-8.889a1.1,1.1,0,1,1,1.1,1.111A1.106,1.106,0,0,1,13.2,11.111Zm-6.6,0a1.1,1.1,0,1,1,1.1,1.111A1.1,1.1,0,0,1,6.6,11.111Zm4.455-7.778A6.666,6.666,0,0,1,17.6,8.922,8.832,8.832,0,0,1,9.768,3.956,8.952,8.952,0,0,1,4.422,10.5,6.689,6.689,0,0,1,11.055,3.333Z" fill="#fff"></path>
                        </svg> 
                        contact
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End of FAQ contact-->

@include('footer')

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
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.faq-question').click(function() {
            $(this).toggleClass('active').next('.faq-answer').slideToggle(300);
        });
    });
</script>
</body><!-- End of .page_wrapper -->
</html>