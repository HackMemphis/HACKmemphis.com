<!-- Header -->
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
    @include('layouts.scripts-css')
    @yield('header')
</head>
<body class="home blog ci-ignitionconf ci-ignitionconf-1-0">
<div id="mobile-bar">
    <a class="menu-trigger" href="#"></a>
    <h1 class="logo"><a href="/"><img src="images/hack-memphis-top.png" alt="HACKmemphis.com" /></a></h1>
</div>

<div id="page">
    @include('sections.header')

    <div class="container">

        @include('sections.sliders')

        @include('sections.about')

        @include('sections.sponsors')

        @include('sections.signup')

        @include('sections.contact')

        @include('sections.events')

        <a href="#" id="btop">Back to Top</a>

    </div> <!-- #container -->
    <!-- Footer -->
    <script type='text/javascript' src='js/scripts.js?ver=1.0'></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <![endif]-->
    @yield('footer')
</div><!-- #page -->
</body>
</html>