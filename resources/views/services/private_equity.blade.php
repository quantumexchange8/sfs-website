@extends('layouts.master')

@section('contents')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/images/background/page-title-4.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Private Equity</h1>
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
                        <figure class="image-box"><img src="{{ asset('images/service/service-18.jpg') }}" alt="">
                        </figure>
                        <div class="sec-title left">
                            <h5>Best services SFS</h5>
                            <h2>Empowering Wealth Potential through Strategic Alliances</h2>
                        </div>
                        <div class="text">
                            <p>Private equity firms are masters of financial transformation, armed with strategic
                                insight and capital prowess. They delve into businesses seeking growth, infusing
                                funds alongside strategic direction, operational finesse, and visionary leadership.
                                Whether nurturing fledgling companies or revitalizing established ones, they reshape
                                organizations, unlocking latent potential and sculpting success stories through
                                holistic approaches.</p>
                            <p>At their core, private equity firms excel in selective investments and meticulous
                                guidance. Leveraging substantial financial resources, they navigate a dance of due
                                diligence and calculated risk, identifying untapped value and fostering growth.
                                Their involvement goes beyond funding, often leading to strategic overhauls,
                                operational refinements, and injecting fresh perspectives for invigorating
                                trajectories. Through symbiotic partnerships and visionary foresight, private equity
                                firms stand as pillars of financial evolution, reshaping industries and birthing
                                success stories.</p>
                        </div>
                        <ul class="list-item clearfix">
                            <li>Long-Term Investments</li>
                            <li>Active Management and Value Creation</li>
                            <li>Illiquid Investments</li>
                            <li>Capital Structure Adjustments</li>
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
                            <li><a href="{{ url('retirement_planning') }}">Retirement Planning</a></li>
                            <li><a href="{{ url('real_estate') }}">Real Estate</a></li>
                            <li><a href="{{ url('hedge_funds') }}">Hedge Funds</a></li>
                            <li><a href="{{ url('private_equity') }}" class="active">Private Equity</a></li>
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
                                <li><a href="{{ url('private_equity') }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ url('private_equity') }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ url('private_equity') }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ url('private_equity') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ url('private_equity') }}"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="download-option">
                        <div class="sidebar-title">
                            <h3>Downloads</h3>
                        </div>
                        <ul class="download-file clearfix">
                            <li><a href="{{ url('private_equity') }}"><i class="fas fa-file-pdf"></i>Presentation
                                    PDF</a></li>
                            <li><a href="{{ url('private_equity') }}"><i class="fas fa-file"></i>Brochure DOC</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->
@endsection