@extends('layouts.master')

@section('contents')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/images/background/page-title-4.jpg);">
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
                            <img src="{{ asset('images/service/service-1.jpg') }}" alt="">
                            <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="financial-analysis.html">Wealth Management</a></h3>
                            <p>Wealth management encompasses a comprehensive approach to financial planning and ...
                            </p>
                            <div class="link"><a href="financial-analysis.html"><i
                                        class="fas fa-arrow-right"></i><span>Read More</span></a></div>
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
                            <img src="{{ asset('images/service/service-5.jpg') }}" alt="">
                            <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="taxation-planning.html">Retirement Planning</a></h3>
                            <p>Retirement planning involves strategic financial management to secure a comfortable
                                and ...</p>
                            <div class="link"><a href="taxation-planning.html"><i
                                        class="fas fa-arrow-right"></i><span>Read More</span></a></div>
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
                            <img src="{{ asset('images/service/service-2.jpg') }}" alt="">
                            <a href="investment-trading.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="investment-trading.html">Real Estate</a></h3>
                            <p>Real estate refers to property consisting of land, buildings, and ...</p>
                            <div class="link"><a href="investment-trading.html"><i
                                        class="fas fa-arrow-right"></i><span>Read More</span></a></div>
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
                            <img src="{{ asset('images/service/service-3.jpg') }}" alt="">
                            <a href="financial-analysis.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="financial-analysis.html">Hedge Funds</a></h3>
                            <p>Hedge funds are investment funds managed by professional managers using ...</p>
                            <div class="link"><a href="financial-analysis.html"><i
                                        class="fas fa-arrow-right"></i><span>Read More</span></a></div>
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
                            <img src="{{ asset('images/service/service-4.jpg') }}" alt="">
                            <a href="taxation-planning.html"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="taxation-planning.html">Private Equity</a></h3>
                            <p>Private Equity involves investing in private companies or acquiring stakes ...</p>
                            <div class="link"><a href="taxation-planning.html"><i
                                        class="fas fa-arrow-right"></i><span>Read More</span></a></div>
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
                            <h2>Let's Embark On A Collaborative Journey Toward a Brighter Future ...</h2>
                        </div>
                        <div class="text">
                            <p>Plan, research, choose wisely for a prosperous investment journey.</p>
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
            <p>Our company extends a range of diversified plans meticulously designed to cater to distinct client
                needs, ensuring maximum efficiency and effectiveness in assisting them to achieve their objectives.
            </p>
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
                                <li>Wealth Management</li>
                                <li><del>Retirement Planning</del></li>
                                <li><del>Real Estate</del></li>
                                <li><del>Hedge Funds</del></li>
                                <li><del>Private Equity</del></li>
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
                                <li>Wealth Management</li>
                                <li>Retirement Planning</li>
                                <li>Real Estate</li>
                                <li><del>Hedge Funds</del></li>
                                <li><del>Private Equity</del></li>
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
                                <li>Wealth Management</li>
                                <li>Retirement Planning</li>
                                <li>Real Estate</li>
                                <li>Hedge Funds</li>
                                <li>Private Equity</li>
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
            <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-1.png') }}"
                        alt=""></a>
            </figure>
            <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-2.png') }}"
                        alt=""></a>
            </figure>
            <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-3.png') }}"
                        alt=""></a>
            </figure>
            <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-4.png') }}"
                        alt=""></a>
            </figure>
            <figure class="client-logo"><a href="index.html"><img src="{{ asset('images/clients/clients-5.png') }}"
                        alt=""></a>
            </figure>
        </div>
    </div>
</section>
<!-- clients-section end -->
@endsection