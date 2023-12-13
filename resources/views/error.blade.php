@extends('layouts.master')

@section('contents')
<!--Page Title-->
    <section class="page-title centred" style="background-image: url(/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>404</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>404</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- error-section -->
    <section class="error-section centred">
        <div class="container">
            <div class="content-box">
                <h1>404</h1>
                <h2>Oops, This Page Not Be Found !</h2>
                <div class="text">Can't find what you need? Take a moment and do a search<br /> below or start from our <a href="{{ url('home') }}">Homepage.</a></div>
            </div>
        </div>
    </section>
    <!-- error-section end -->
@endsection