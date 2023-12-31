@extends('layouts.master')

@section('contents')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
<section class="faq">
    <div class="accordion" id="accordionPanels">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                    Is SFS a registered company?
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                Yes, SFS is a registered company.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                What steps do I need to take to join SFS?
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                Simply complete our online application form and submit the required KYC papers.Alternately, you may
                contact us and we will assist you with the various procedures.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                How soon can I begin investing or trading with SFS?
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                As soon as we have evaluated your investment requirements and received your KYC documentation, one
                of our specialists will initiate your journey immediately.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFour">
                Can I invest from anywhere in the world?
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
                Our network's worldwide reach is exceptional, so you are never limited no matter where you are in
                the world.
                << /div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseFive">
                    What if I don't know much about the financial markets?
                </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingFive">
                <div class="accordion-body">
                    Our expert team will guide you in every way possible to make you feel comfortable and understand
                    everything you need to know about the investment or trade you will be making.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSix">
                    Does SFS have an internship program?
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingSix">
                <div class="accordion-body">
                    We hire a small number of interns each year, so if you have any questions about
                    upcomingopportunities, please send us an email and a member of our staff will respond as soon as
                    possible. We hire a small number of interns each year, so if you have any questions about upcoming
                    opportunities, please send us an email and a member of our staff will respond as soon as possible.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseSeven">
                    Can I invest or trade using Cryptocurrency?
                </button>
            </h2>
            <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingSeven">
                <div class="accordion-body">
                    Here at SFS, we accept all major Cryptocurrencies.
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of FAQs-->

<!--FAQ contact-->
<div class="row mt-60">
    <div class="col-12">
        <div class="hc-contact media">
            <div class="img">
                <img src="{{ asset('images/icons/contact-icon.png') }}" alt="">
            </div>
            <div class="content media-body">
                <h2>Unable to Find Your Answer?</h2>
                <a href="{{ url('contact') }}" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20"
                        class="svg replaced-svg">
                        <path id="btn-contact"
                            d="M9.9,20V17.778h8.8V9.889a7.7,7.7,0,1,0-15.4,0v6.778H2.2A2.218,2.218,0,0,1,0,14.444V12.222a2.19,2.19,0,0,1,1.1-1.911,9.907,9.907,0,1,1,19.8-.067,2.049,2.049,0,0,1,1.1,1.8V14.6a2.055,2.055,0,0,1-1.1,1.822v1.356A2.218,2.218,0,0,1,18.7,20Zm3.3-8.889a1.1,1.1,0,1,1,1.1,1.111A1.106,1.106,0,0,1,13.2,11.111Zm-6.6,0a1.1,1.1,0,1,1,1.1,1.111A1.1,1.1,0,0,1,6.6,11.111Zm4.455-7.778A6.666,6.666,0,0,1,17.6,8.922,8.832,8.832,0,0,1,9.768,3.956,8.952,8.952,0,0,1,4.422,10.5,6.689,6.689,0,0,1,11.055,3.333Z"
                            fill="#fff"></path>
                    </svg>
                    contact
                </a>
            </div>
        </div>
    </div>
</div>
<!--End of FAQ contact-->
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
@endsection