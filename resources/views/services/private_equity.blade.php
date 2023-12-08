@extends('layouts.master')

@section('contents')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/images/background/page-title-4.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Private Equity</h1>
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
                    <div class="content-style-two">
                        <div class="image-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image"><img src="{{ asset('images/service/service-12.jpg') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image"><img src="{{ asset('images/service/service-13.jpg') }}"
                                            alt="">
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
                            <li><a href="retirement-planning.html">Retirement Planning</a></li>
                            <li><a href="real-estate.html">Real Estate</a></li>
                            <li><a href="hedge-funds.html">Hedge Funds</a></li>
                            <li><a href="private-equity.html" class="active">Private Equity</a></li>
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
@endsection