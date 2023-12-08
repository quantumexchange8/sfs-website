<!-- main header -->
<header class="main-header style-two">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <ul class="info top-left pull-left">
                    <li><a href="{{ url('about') }}">About</a></li>
                    <li><a href="{{ url('home') }}">Careers</a></li>
                    <li><a href="{{ url('services') }}">Services</a></li>
                    <li><a href="{{ url('experts_team') }}">Agents</a></li>
                </ul>
                <div class="top-right pull-right">
                    <ul class="social-links clearfix">
                        <li>Connect Socially</li>
                        <li><a href="{{ url('home') }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ url('home') }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ url('home') }}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ url('home') }}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-upper">
        <div class="auto-container">
            <div class="upper-inner clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{ url('home') }}"><img src="{{ asset('images/logo-black.png') }}" alt=""></a></figure>
                </div>
                <div class="info-box pull-right">
                    <ul class="info-list clearfix">
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            <p>Call Our Support<br /><a href="tel:01005200369">0100 5200 369</a></p>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>838 Andy Street, Madison, <br />New Jersy 08003</p>
                        </li>
                        <li>
                            <i class="far fa-clock"></i>
                            <p>Our Working Hours <br />Mon - Sat: 8 am - 6 pm</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lower">
        <div class="outer-box">
            <div class="auto-container">
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('home') }}">Home</a></li>
                                <li class="dropdown"><a href="{{ url('about') }}">About</a>
                                    <ul>
                                        <li><a href="{{ url('experts_team') }}">Experts Team</a></li>
                                        <li><a href="{{ url('pricing') }}">Our Plan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ url('services') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ url('wealth_management') }}">Wealth Management</a></li>
                                        <li><a href="{{ url('retirement_planning') }}">Retirement Planning</a></li>
                                        <li><a href="{{ url('real_estate') }}">Real Estate</a></li>
                                        <li><a href="{{ url('hedge_funds') }}">Hedge Funds</a></li>
                                        <li><a href="{{ url('private_equity') }}" class="active">Private Equity</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                                <li><a href="{{ url('faq') }}">FAQs</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content clearfix">
                        <div class="search-btn">
                            <button type="button" class="search-toggler"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="btn-box">
                            <a href="{{ url('contact') }}" class="theme-btn style-two">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="{{ url('home') }}"><img src="{{ asset('images/small-logo-black.png') }}" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->