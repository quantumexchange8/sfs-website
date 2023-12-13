@extends('layouts.master')

@section('contents')
<!--Page Title-->
<section class="page-title centred" style="background-image: url(/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Track Record</h1>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- track-info-section -->
<section class="track-info-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="track-title-column">
                <div class="track-info">
                    <figure class="track-logo">
                        <a href="{{ url('home') }}">
                            <img src="{{ asset('/images/middle-logo.png') }}" alt="Sixty-Fourth Securities Logo">
                        </a>
                    </figure>
                    <div class="textbox">
                        <div class="text">
                            <p>Founded in 2022, Sixty-Fourth Securities (SFS) embarked on a transformative journey with
                                a
                                steadfast commitment to redefine financial paradigms. Despite our recent inception, SFS
                                has
                                swiftly forged a promising track record marked by unwavering dedication and meticulous
                                diligence.</p>

                            <p>Specializing in strategic investments within esteemed Blue Chip companies, proactive
                                asset
                                management, and astute property development, SFS has showcased early yet notable
                                successes.
                                Our
                                growth trajectory reflects a steadfast dedication to ensuring consistent returns and
                                nurturing
                                lucrative opportunities for our esteemed clients.</p>

                            <p>Since our establishment, SFS has charted a vision targeting investor returns ranging
                                between
                                13-17% annually across our esteemed Growth Fund series. Collaborating closely with our
                                esteemed
                                network of partners, advisors, and consultants, we actively seek diverse avenues to
                                augment
                                portfolio value.</p>

                            <p>Outlined below are glimpses from our recent trading history, featuring investment
                                periods,
                                holding durations, and corresponding profit percentages. These instances epitomize our
                                unwavering commitment to delivering promising outcomes, laying the groundwork for a
                                triumphant
                                voyage within the financial sphere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- track-info-section end -->

<!-- track-record-section -->
<section class="track-record">
    <div class="container">
        <div class="row justify-content-between">
            <div class="track-box">
                <div class="post-author media" style="background-color: #fff;">
                    <div class="author-info media-body">
                        <img src="{{ asset('images/icons/OS.png') }}" alt="">
                        <h4 class="mb-3" style="color:#000;">ON Semiconductor</h4>
                        <div class="row">
                            <p style="color: #000;">
                                <strong>NASDAQ: ON</strong><br>
                                <strong>Bought at:</strong> $41.50<br>
                                <strong>Buy Date:</strong> 20/08/2021<br>
                                <strong>Sold at:</strong> $60.84<br>
                                <strong>Sell Date:</strong> 16/12/2021<br>
                                <strong>Hold period:</strong> 118 Days<br>
                                <strong>Profit:</strong> 46.60%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="track-box">
                <div class="post-author media" style="background-color: #fff;">
                    <div class="author-info media-body">
                        <img src="{{ asset('images/icons/Ford.png') }}" alt="">
                        <h4 class="mb-3" style="color: #000;">Ford Motor</h4>
                        <div class="row">
                            <p style="color: #000;">
                                <strong>NYSE: F</strong><br>
                                <strong>Bought at:</strong> $12.67<br>
                                <strong>Buy Date:</strong> 19/08/2021<br>
                                <strong>Sold at:</strong> $21.45<br>
                                <strong>Sell Date:</strong> 10/12/2021<br>
                                <strong>Hold period:</strong> 113 Days<br>
                                <strong>Profit:</strong> 69.30%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="track-box">
                <div class="post-author media" style="background-color: #fff;">
                    <div class="author-info media-body">
                        <img src="{{ asset('images/icons/GS.png') }}" alt="">
                        <h4 class="mb-3" style="color: #000;">Gamestop</h4>
                        <div class="row">
                            <p class="stock-info" style="color: #000;"></p>
                            <p style="color: #000;">
                                <strong>NYSE: GME</strong><br>
                                <strong>Bought at:</strong> $159.30<br>
                                <strong>Buy Date:</strong> 20/08/2021<br>
                                <strong>Sold at:</strong> $199.72<br>
                                <strong>Sell Date:</strong> 26/11/2021<br>
                                <strong>Hold period:</strong> 98 Days<br>
                                <strong>Profit:</strong> 25.37%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="track-box">
                <div class="post-author media" style="background-color: #fff;">
                    <div class="author-info media-body">
                        <img src="{{ asset('images/icons/MDN.png') }}" alt="">
                        <h4 class="mb-3" style="color: #000;">Moderna</h4>
                        <div class="row">
                            <p style="color: #000;">
                                <strong>NASDAQ: MRNA</strong><br>
                                <strong>Bought at:</strong> $143.74<br>
                                <strong>Buy Date:</strong> 19/03/2021<br>
                                <strong>Sold at:</strong> $394.94<br>
                                <strong>Sell Date:</strong> 24/08/2021<br>
                                <strong>Hold period:</strong> 158 Days<br>
                                <strong>Profit:</strong> 174.76%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- track-record-section end-->
@endsection