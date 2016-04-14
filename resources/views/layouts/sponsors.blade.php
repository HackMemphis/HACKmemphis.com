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
    @include('sponsors.header')

    <div class="container">

        <!-- section_sponsors.php start -->
        <section id="sponsors">
            <div class="row">
                <h1 class="section-title"><span>2016 Sponsors</span></h1>
                <ul class="sponsor-list">

                    @foreach ($sponsors['2016'] as $sponsor)
                        <li class="two columns">
                            <a href="{{ $sponsor->link }}" target="_blank">
                                <img src="{{ $sponsor->logo_path }}"
                                     class="attachment-square wp-post-image"
                                     alt="{{ $sponsor->alt_text }}" />
                            </a>
                        </li>
                    @endforeach

                    <li class="two columns">
                        <a href="" target="_blank">
                            <img src="" class="attachment-square wp-post-image"
                                 alt="" />
                        </a>
                    </li>

                </ul>
            </div> <!-- .row < #sponsors -->
            <div class="row">
                <h1 class="section-title"><span>2015 Sponsors</span></h1>
                <ul class="sponsor-list">

                    @foreach ($sponsors['2015'] as $sponsor)
                        <li class="two columns">
                            <a href="{{ $sponsor->link }}" target="_blank">
                                <img src="{{ $sponsor->logo_path }}"
                                     class="attachment-square wp-post-image"
                                     alt="{{ $sponsor->alt_text }}" />
                            </a>
                        </li>
                    @endforeach

                    <li class="two columns">
                        <a href="" target="_blank">
                            <img src="" class="attachment-square wp-post-image"
                                 alt="" />
                        </a>
                    </li>

                </ul>
            </div> <!-- .row < #sponsors -->
            <div class="row">
                <h1 class="section-title"><span>2014 Sponsors</span></h1>
                <ul class="sponsor-list">

                    @foreach ($sponsors['2014'] as $sponsor)
                        <li class="two columns">
                            <a href="{{ $sponsor->link }}" target="_blank">
                                <img src="{{ $sponsor->logo_path }}"
                                     class="attachment-square wp-post-image"
                                     alt="{{ $sponsor->alt_text }}" />
                            </a>
                        </li>
                    @endforeach

                    <li class="two columns">
                        <a href="" target="_blank">
                            <img src="" class="attachment-square wp-post-image"
                                 alt="" />
                        </a>
                    </li>

                </ul>
            </div> <!-- .row < #sponsors -->
            <div class="row">
                <h1 class="section-title"><span>2013 Sponsors</span></h1>
                <ul class="sponsor-list">

                    @foreach ($sponsors['2013'] as $sponsor)
                        <li class="two columns">
                            <a href="{{ $sponsor->link }}" target="_blank">
                                <img src="{{ $sponsor->logo_path }}"
                                     class="attachment-square wp-post-image"
                                     alt="{{ $sponsor->alt_text }}" />
                            </a>
                        </li>
                    @endforeach

                    <li class="two columns">
                        <a href="" target="_blank">
                            <img src="" class="attachment-square wp-post-image"
                                 alt="" />
                        </a>
                    </li>

                </ul>
            </div> <!-- .row < #sponsors -->
        </section> <!-- #sponsors -->
        <!-- section_sponsors.php end -->

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