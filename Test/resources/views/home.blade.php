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
                            <input type="submit" value="Search Now!" class="theme-btn style-two">
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
    </div>
    <!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section style-two">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(/images/banner/banner-1.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Take a ride on the success avalanche</h5>
                        <h1>Monetary Support<br />With Sincere Intentions</h1>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two">How Should We Assist?</a>
                            <a href="index" class="user-btn"><i class="far fa-user"></i><span>Make Contact With an
                                    Expert</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(/images/banner/banner-2.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box centred">
                        <ul class="list-item clearfix">
                            <li>.&nbsp;<a href="index.html">Knowledgeable</a>&nbsp;.&nbsp;</li>
                            <li><a href="index.html">Skilled</a>&nbsp;.&nbsp;</li>
                            <li><a href="index.html">Competent</a>&nbsp;.&nbsp;</li>
                        </ul>
                        <h1>Worldwide Network To<br />Offer Support</h1>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two mar-0">How Should We Assist?</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(/images/banner/banner-3.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Take a ride on the success avalanche</h5>
                        <h1>Strengthening Bonds & <br />Faith at Any Time</h1>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn style-two mr-10">How Should We Assist?</a>
                            <a href="index.html" class="banner-btn-two">Make Contact With an Expert</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


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
                            <h2>Testament To The Extraordinary Potential <span>—</span> of Collaboration, Innovation,
                                and Expertise</h2>
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


    <!-- feature-section -->
    <section class="feature-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="/images/resource/feature-1.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Wealth Management</h3>
                                    <a href="index.html"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="/images/resource/feature-2.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Real Estate</h3>
                                    <a href="index.html"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="/images/resource/feature-3.jpg" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Hedge Funds</h3>
                                    <a href="index.html"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section end -->


    <!-- about-style-four -->
    <section class="about-style-four">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="sec-title style-two right">
                                <h5>About SFS</h5>
                                <h2>AI-Powered Digital Future Planning Based on Human Insight</h2>
                            </div>
                            <div class="text">
                                <p>Sixty-fourth Securities uses human insight and artificial intelligence to inform
                                    their trading strategies.</p>
                                <p> Since their establishment in 2022, they have overseen assets valued over $5 billion,
                                    demonstrating their
                                    proficiency in foreign exchange, fund management, derivatives trading, and
                                    brokering.</p>
                            </div>
                            <div class="progress-content">
                                <div class="progress-box">
                                    <p>Foreign Exchange</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%"></div>
                                        <span class="count-text">70%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <p>Fund Management</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%"></div>
                                        <span class="count-text">90%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <p>Derivatives Trading</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="50%"></div>
                                        <span class="count-text">50%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <p>Brokering</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%"></div>
                                        <span class="count-text">70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_four">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url(/images/shape/shape-23.png);"></div>
                            <figure class="image wow slideInRight animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms"><img src="/images/resource/about-3.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-four end -->


    <!-- funfact-style-four -->
    <section class="funfact-style-four centred">
        <div class="pattern-layer" style="background-image: url(/images/shape/shape-24.png);"></div>
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


    <!-- service-style-five -->
    <section class="service-style-five bg-color-1">
        <div class="auto-container">
            <div class="sec-title style-two right">
                <h5>Worldwide Reputable, Reliable & Trustworthy</h5>
                <h2>Superior Services That Make An Impact</h2>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <i class="flaticon-rocket"></i>
                            Wealth Management
                        </li>
                        <li class="tab-btn" data-tab="#tab-2">
                            <i class="flaticon-innovation-1"></i>
                            Real Estate
                        </li>
                        <li class="tab-btn" data-tab="#tab-3">
                            <i class="flaticon-growth-3"></i>
                            Hedge Funds
                        </li>
                        <li class="tab-btn" data-tab="#tab-4">
                            <i class="flaticon-idea"></i>
                            Private Equity
                        </li>
                        <li class="tab-btn" data-tab="#tab-5">
                            <i class="flaticon-target"></i>
                            Retirement Planning
                        </li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="/images/service/service-1.jpg" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Wealth Management</h3>
                                    <p>Wealth management is a comprehensive financial service designed to optimize and
                                        protect your financial well-being. It
                                        involves personalized financial planning, expert investment guidance, risk
                                        management, tax optimization, estate
                                        planning, education funding and wealth transfer strategies. By tailoring these
                                        services to individual goals and
                                        circumstances, wealth management aims to ensure financial stability, maximize
                                        returns, minimize risk and achieve both
                                        near- and long-term financial aspirations.</p>
                                    <ul class="list-item clearfix">
                                        <li>Tax Optimization</li>
                                        <li>Investment Guidance</li>
                                        <li>Risk Management</li>
                                        <li>Education Funding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="/images/service/service-2.jpg" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Real Estate</h3>
                                    <p>Real Estate management is about optimizing property investments. It involves
                                        tailored strategies for property
                                        acquisition, maximizing value, minimizing risks, and navigating operational
                                        complexities. Services include expert
                                        guidance on investments, risk management, tax planning, and enhancing property
                                        performance to meet financial
                                        objectives effectively. Real Estate managers oversee property portfolios, aiming
                                        to enhance value and achieve the
                                        best outcomes from real estate investments.</p>
                                    <ul class="list-item clearfix">
                                        <li>Property Acquisition</li>
                                        <li>Leasing and Tenant Management</li>
                                        <li>Tax Planning for Real Estate</li>
                                        <li>Property Portfolio Enhancement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-3">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="/images/service/service-3.jpg" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Hedge Funds</h3>
                                    <p>Hedge Funds are managed investment pools employing diverse strategies beyond
                                        typical investments to pursue higher
                                        returns. They use techniques like leveraging and alternative assets, aiming to
                                        generate profits regardless of market
                                        conditions. Managers closely watch risks, diversify investments, and adapt
                                        strategies to maximize gains. Hedge Funds
                                        often cater to high-net-worth individuals or institutions seeking potentially
                                        higher returns than traditional
                                        investments offer.</p>
                                    <ul class="list-item clearfix">
                                        <li>Sophisticated Investment Strategies</li>
                                        <li>Absolute Return Objective</li>
                                        <li>Risk Management Techniques</li>
                                        <li>Alternative Asset Classes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-4">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="/images/service/service-4.jpg" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Private Equity</h3>
                                    <p>Private Equity involves investing in private companies or acquiring stakes in
                                        existing ones with the goal of
                                        long-term growth. These investments are not publicly traded and typically
                                        require active management to enhance
                                        operations and profitability. Though less liquid, they offer potential for
                                        higher returns upon eventual sale or
                                        exit, often through strategic sales or IPOs. Private Equity represents an
                                        active, hands-on investment strategy
                                        focused on fostering growth and increasing the value of private companies.</p>
                                    <ul class="list-item clearfix">
                                        <li>Long-Term Investments</li>
                                        <li>Active Management and Value Creation</li>
                                        <li>Illiquid Investments</li>
                                        <li>Capital Structure Adjustments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-5">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="/images/service/service-5.jpg" alt=""></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                                <div class="content-box">
                                    <h3>Retirement Planning</h3>
                                    <p>Retirement planning is a strategic financial process that individuals undertake
                                        to ensure financial security during their post-employment years. It involves
                                        assessing future financial needs, setting savings goals, and selecting
                                        appropriate investment vehicles to accumulate a sufficient nest egg. This
                                        planning typically considers various factors such as desired lifestyle, expected
                                        expenses, retirement age, and sources of income, aiming to build a diversified
                                        portfolio that balances risk and return. The objective is to create a
                                        sustainable income stream that supports one's lifestyle throughout retirement,
                                        often utilizing retirement accounts like 401(k)s, IRAs, pensions, or other
                                        investment vehicles to achieve these goals.
                                    </p>
                                    <ul class="list-item clearfix">
                                        <li>Financial Goal Setting</li>
                                        <li>Investment Strategy</li>
                                        <li>Income Sources and Streams</li>
                                        <li>Risk Management and Contingency Planning</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-five end -->


    <!-- project-section -->
    <section class="project-section">
        <div class="fluid-container">
            <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/gallery/project-1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Strategic Asset Allocation</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/gallery/project-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Financial Initiatives</p>
                            <h2><a href="index.html">Early Investments</a></h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="/images/gallery/project-3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2><a href="index.html">Advisory Portfolios</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-section end -->


    <!-- annual-stats -->
    <section class="annual-stats">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_two">
                        <div class="content-box">
                            <div class="sec-title left">
                                <h5>Annual Stats</h5>
                                <h2>Graph Shows Net Value Profit Assembling</h2>
                            </div>
                            <div class="text">
                                <p>Exercise and labor aren't always synonymous with hardship. They often pave the way
                                    for growth and improvement.Exercise leads to fitness and mental clarity, while
                                    labor, driven by passion, can bring fulfillment and success. Despite challenges,
                                    both can yield progress, learning, and eventual rewards..</p>
                            </div>
                            <div class="inner-box clearfix">
                                <div class="single-progress-box">
                                    <div class="box">
                                        <div class="piechart" data-fg-color="#204669" data-value=".75">
                                            <span>.75</span>
                                        </div>
                                        <h5>Global Flexibility <br />Investment</h5>
                                        <h3>Upto 75% Asests</h3>
                                    </div>
                                </div>
                                <div class="single-progress-box">
                                    <div class="box">
                                        <div class="piechart" data-fg-color="#da2c46" data-value=".75">
                                            <span>.25</span>
                                        </div>
                                        <h5>Security Financial <br />Solutions</h5>
                                        <h3>Upto 25% Efficient</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_one">
                        <div class="image-box">
                            <div class="pattern-layer" style="background-image: url(/images/shape/shape-1.png);"></div>
                            <figure class="image"><img src="/images/resource/state-1.jpg" alt=""></figure>
                            <div class="award-box">
                                <div class="box">
                                    <figure class="icon-box"><img src="/images/icons/icon-1.png" alt=""></figure>
                                    <span>Financial & Consulting Award 2022-2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- annual-stats end -->


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


    <!-- support-section -->
    <section class="support-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box">
                            <div class="sec-title light left">
                                <h5>try our service</h5>
                                <h2>Get Free Quote</h2>
                                <p>Plan, research, choose wisely for a prosperous investment journey.</p>
                            </div>
                            <form action="contact.html" method="post" class="submit-form">
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
                                    <button type="submit" class="theme-btn style-two">request service</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 info-column">
                        <div class="info-inner">
                            <figure class="image-box"><img src="/images/resource/info-1.jpg" alt=""></figure>
                            <div class="info-box">
                                <figure class="info-logo"><img src="/images/icons/info-logo.png" alt=""></figure>
                                <div class="icon-box"><i class="fas fa-phone"></i></div>
                                <h2><a href="tel:18003698527">1-800-369-8527</a></h2>
                                <div class="email"><a href="mailto:support@my-domain.net">support@my-domain.net</a>
                                </div>
                                <ul class="list-item clearfix">
                                    <li>.&nbsp;<a href="index.html">Knowledgeable</a>&nbsp;.</li>
                                    <li><a href="index.html">Skilled</a>&nbsp;.</li>
                                    <li><a href="index.html">Competent</a>&nbsp;.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section" style="background-image: url(/images/background/testimonial-bg.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title right">
                            <h5>Testimonials</h5>
                            <h2>The Comment of <br />Our Clients</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text">
                            <p>The valuable feedback given by the client who has experienced the quality of our service
                                offering.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-inner">
                <div class="client-testimonial-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="text">
                            <p>Partnering with this stock trading firm was a pivotal move for me. Their expert guidance
                                and tailored
                                strategies transformed my trading experience. I witnessed substantial growth in my
                                portfolio thanks
                                to their invaluable support and commitment to client success.</p>
                        </div>
                    </div>
                </div>
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="/images/resource/testimonial-1.jpg" alt=""></figure>
                            <div class="info-box">
                                <h5>Robert Smith</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="/images/resource/testimonial-2.jpg" alt=""></figure>
                            <div class="info-box">
                                <h5>Christine Eva</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="/images/resource/testimonial-3.jpg" alt=""></figure>
                            <div class="info-box">
                                <h5>Jhon Doe</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="/images/resource/testimonial-4.jpg" alt=""></figure>
                            <div class="info-box">
                                <h5>Robert</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="/images/resource/testimonial-5.jpg" alt=""></figure>
                            <div class="info-box">
                                <h5>Tomas Tom</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-1.png" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-2.png" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-3.png" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-4.png" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="/images/clients/clients-5.png" alt=""></a>
                </figure>
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