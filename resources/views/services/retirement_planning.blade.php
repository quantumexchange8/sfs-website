@extends('layouts.master')

@section('contents')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/images/background/page-title-4.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Retirement Planning</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('home') }}">Home</a></li>
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
                        <figure class="image-box"><img src="{{ asset('images/service/service-15.jpg') }}" alt="">
                        </figure>
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
                    @include('layouts.extra_contents')
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar">
                    <div class="sidebar-categories">
                        <ul class="categories-list clearfix">
                            <li><a href="{{ url('wealth_management') }}">Wealth Management</a></li>
                            <li><a href="{{ url('retirement_planning') }}" class="active">Retirement Planning</a></li>
                            <li><a href="{{ url('real_estate') }}">Real Estate</a></li>
                            <li><a href="{{ url('hedge_funds') }}">Hedge Funds</a></li>
                            <li><a href="{{ url('private_equity') }}">Private Equity</a></li>
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
                                    <figure class="image-box"><img
                                            src="{{ asset('images/resource/testimonial-9.png') }}" alt="">
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
                                    <figure class="image-box"><img
                                            src="{{ asset('images/resource/testimonial-9.png') }}" alt="">
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
                                    <figure class="image-box"><img
                                            src="{{ asset('images/resource/testimonial-9.png') }}" alt="">
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
                                <li><a href="{{ url('retirement_planning') }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ url('retirement_planning') }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ url('retirement_planning') }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ url('retirement_planning') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ url('retirement_planning') }}"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="download-option">
                        <div class="sidebar-title">
                            <h3>Downloads</h3>
                        </div>
                        <ul class="download-file clearfix">
                            <li><a href="{{ url('retirement_planning') }}"><i class="fas fa-file-pdf"></i>Presentation
                                    PDF</a></li>
                            <li><a href="{{ url('retirement_planning') }}"><i class="fas fa-file"></i>Brochure DOC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->
@endsection