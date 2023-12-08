<!DOCTYPE html>
<html lang="en">
<meta name="robots" content="noindex, nofollow">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>SFS - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('images/favicon-2.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>
<link href="{{ asset('css/font-awesome-all.css') }}" rel="stylesheet">

<body>

    @include('layouts.preloader')
    @include('layouts.search_pop_up')
    @include('layouts.mobile_menu')
    @include('layouts.header')
    @yield('contents')
    @include('layouts.cta')
    @include('layouts.footer')
    @include('layouts.scroll_up')
    @include('layouts.sidebar')
    @include('layouts.footer_script')
    @yield('script')

</body>

</html>