@extends('layouts.master')

@section('contents')
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
                            <li>.&nbsp;Knowledgeable&nbsp;.&nbsp;</li>
                            <li>Skilled&nbsp;.&nbsp;</li>
                            <li>Competent&nbsp;.&nbsp;</li>
                        </ul>
                        <h1>Worldwide Network To<br />Offer Support</h1>
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
                            <a href="{{ url('contact') }}" class="banner-btn-two">Make Contact With an Expert</a>
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
                            <figure class="image-box"><img src="{{ asset('images/icons/year-icon.png') }}" alt=""></figure>
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
                        <a href="{{ url('about') }}"><i class="fas fa-arrow-right"></i><span>Who We Are</span></a>
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
                            <figure class="image-box"><img src="{{ asset('images/resource/feature-1.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Wealth Management</h3>
                                    <a href="{{ url('wealth_management') }}"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('images/resource/feature-2.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Real Estate</h3>
                                    <a href="{{ url('real_estate') }}"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('images/resource/feature-3.jpg') }}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h3>Hedge Funds</h3>
                                    <a href="{{ url('hedge_funds') }}"><span>Learn more</span><i class="fas fa-arrow-right"></i></a>
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
                                data-wow-duration="1500ms"><img src="{{ asset('images/resource/about-3.jpg') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-four end -->

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
                                <figure class="image-box"><img src="{{ asset('images/service/service-1.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('images/service/service-2.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('images/service/service-3.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('images/service/service-4.jpg') }}" alt=""></figure>
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
                                <figure class="image-box"><img src="{{ asset('images/service/service-5.jpg') }}" alt=""></figure>
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
                        <figure class="image-box"><img src="{{ asset('images/gallery/project-1.jpg') }}" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2>Strategic Asset Allocation</h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('images/gallery/project-2.jpg') }}" alt=""></figure>
                        <div class="lower-content">
                            <p>Financial Initiatives</p>
                            <h2>Early Investments</h2>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="{{ asset('images/gallery/project-3.jpg') }}" alt=""></figure>
                        <div class="lower-content">
                            <p>Corporate Management</p>
                            <h2>>Advisory Portfolios</h2>
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
                            <figure class="image"><img src="{{ asset('images/resource/state-1.jpg') }}" alt=""></figure>
                            <div class="award-box">
                                <div class="box">
                                    <figure class="icon-box"><img src="{{ asset('images/icons/icon-1.png') }}" alt=""></figure>
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
                            <form action="{{ url('contact') }}" method="post" class="submit-form">
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
                            <figure class="image-box"><img src="{{ asset('images/resource/info-1.jpg') }}" alt=""></figure>
                            <div class="info-box">
                                <figure class="info-logo"><img src="{{ asset('images/icons/info-logo.png') }}" alt=""></figure>
                                <div class="icon-box"><i class="fas fa-phone"></i></div>
                                <h2><a href="tel:18003698527">1-800-369-8527</a></h2>
                                <div class="email"><a href="mailto:support@my-domain.net">support@my-domain.net</a>
                                </div>
                                <ul class="list-item clearfix">
                                    <li>.&nbsp;Knowledgeable&nbsp;.</li>
                                    <li>Skilled&nbsp;.</li>
                                    <li>Competent&nbsp;.</li>
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
                            <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-1.jpg') }}" alt=""></figure>
                            <div class="info-box">
                                <h5>Robert Smith</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-2.jpg') }}" alt=""></figure>
                            <div class="info-box">
                                <h5>Christine Eva</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-3.jpg') }}" alt=""></figure>
                            <div class="info-box">
                                <h5>Jhon Doe</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-4.jpg') }}" alt=""></figure>
                            <div class="info-box">
                                <h5>Robert</h5>
                                <span class="designation">Senior Manager</span>
                            </div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="{{ asset('images/resource/testimonial-5.jpg') }}" alt=""></figure>
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
                <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-1.png') }}" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-2.png') }}" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-3.png') }}" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-4.png') }}" alt=""></a>
                </figure>
                <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-5.png') }}" alt=""></a>
                </figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->
@endsection