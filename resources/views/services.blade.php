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
                            <a href="{{ url('wealth_management') }}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('wealth_management') }}">Wealth Management</a></h3>
                            <p>Wealth management encompasses a comprehensive approach to financial planning and ...
                            </p>
                            <div class="link"><a href="{{ url('wealth_management') }}"><i
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
                            <a href="{{ url('retirement_planning') }}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('retirement_planning') }}">Retirement Planning</a></h3>
                            <p>Retirement planning involves strategic financial management to secure a comfortable
                                and ...</p>
                            <div class="link"><a href="{{ url('retirement_planning') }}"><i
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
                            <a href="{{ url('real_estate') }}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('real_estate') }}">Real Estate</a></h3>
                            <p>Real estate refers to property consisting of land, buildings, and ...</p>
                            <div class="link"><a href="{{ url('real_estate') }}"><i
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
                            <a href="{{ url('hedge_funds') }}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('hedge_funds') }}">Hedge Funds</a></h3>
                            <p>Hedge funds are investment funds managed by professional managers using ...</p>
                            <div class="link"><a href="{{ url('hedge_funds') }}"><i
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
                            <a href="{{ url('private_equity') }}"><i class="fas fa-link"></i></a>
                        </figure>
                        <div class="lower-content">
                            <h3><a href="{{ url('private_equity') }}">Private Equity</a></h3>
                            <p>Private Equity involves investing in private companies or acquiring stakes ...</p>
                            <div class="link"><a href="{{ url('private_equity') }}"><i
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
@endsection