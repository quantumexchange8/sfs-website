<!-- main-footer -->
<footer class="main-footer alternet-2">
    <div class="footer-upper">
        <div class="auto-container">
            <div class="upper-inner clearfix">
                <div class="text pull-left">
                    <h2>Do you want to learn about us?</h2>
                    <p>We're eager to assist you promptly with your planning needs.</p>
                </div>
                <div class="btn-box pull-right">
                    <a href="{{ url('contact') }}" class="theme-btn style-two">Get In Touch Today</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top">
        <div class="auto-container">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href="{{ url('home') }}"><img src="{{asset('/images/footer-logo-white.png')}}"
                                        alt=""></a></figure>
                            <div class="text">
                                <p>Should you have any inquiries, please do not hesitate to contact us.</p>
                            </div>
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>838 Andy Street, Madison, NJ 08003</li>
                                <li><i class="fas fa-envelope"></i>Email <a
                                        href="mailto:support@my-domain.com">support@my-domain.com</a></li>
                                <li><i class="fas fa-headphones"></i>Support <a href="tel:01005200369">0100 5200 369</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-70">
                            <div class="widget-title">
                                <h4>Useful Links</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                    <li><a href="{{ url('detail_about') }}">Our Details</a></li>
                                    <li><a href="{{ url('experts_team') }}">Our Professional</a></li>
                                    <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ url('faq') }}">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h4>What We Do</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="{{ url('wealth_management') }}">Wealth Management</a></li>
                                    <li><a href="{{ url('retirement_planning') }}">Retirement Planning</a></li>
                                    <li><a href="{{ url('real_estate') }}">Real Estate</a></li>
                                    <li><a href="{{ url('hedge_funds') }}">Hedge Funds</a></li>
                                    <li><a href="{{ url('private_equity') }}">Private Equity</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget newsletter-widget">
                            <div class="widget-title">
                                <h4>Newsletter</h4>
                            </div>
                            <div class="widget-content">
                                <div class="text">
                                    <p>Get in your inbox the latest News</p>
                                </div>
                                <form action="contact.html" method="post" class="newsletter-form">
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="form-group message-btn">
                                        <button class="theme-btn style-two" type="submit">subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <p>&copy; 2023 <a href="{{ url('home') }}">SFS</a> - Business & Consulting. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->