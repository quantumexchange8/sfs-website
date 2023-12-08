@extends('layouts.master')

@section('contents')
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
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        Is SFS a registered company?
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Yes, SFS is a registered company.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        What steps do I need to take to join SFS?
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Simply complete our online application form and submit the required KYC papers.Alternately, you may
                    contact us and we will assist you with the various procedures.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        How soon can I begin investing or trading with SFS?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    As soon as we have evaluated your investment requirements and received your KYC documentation, one
                    of
                    our specialists will initiate your journey immediately.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                        aria-expanded="false" aria-controls="collapseFour">
                        Can I invest from anywhere in the world?
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    Our network's worldwide reach is exceptional, so you are never limited no matter where you are in
                    the
                    world.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                        aria-expanded="false" aria-controls="collapseFive">
                        What if I don't know much about the financial markets?
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    Our expert team will guide you in every way possible to make you feel comfortable and understand
                    everything you need to know about the investment or trade you will be making.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix"
                        aria-expanded="false" aria-controls="collapseSix">
                        Does SFS have an internship program?
                    </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    We hire a small number of interns each year, so if you have any questions about
                    upcomingopportunities, please send us an email and a member of our staff will respond as soon as
                    possible. We hire a small number of interns each year, so if you have any questions about upcoming
                    opportunities, please send us an email and a member of our staff will respond as soon as possible.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven"
                        aria-expanded="false" aria-controls="collapseSeven">
                        Can I invest or trade using Cryptocurrency?
                    </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
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
<script>var collapseElements = document.querySelectorAll('.collapse');</script>
<script>$('.collapse').each(function(index) {
  if (index !== 0) {
    $(this).collapse('hide');
  }
});</script>
@endsection