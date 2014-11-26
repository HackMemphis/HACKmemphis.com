<!-- Header -->
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
    <title>HACKmemphis.com | Make Tech Happen</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script type="text/javascript">//<![CDATA[
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39820613-1']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        //]]></script>
    <link rel='stylesheet' id='ci-google-font-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C400italic%2C700italic%2C800&#038;subset=latin%2Cgreek-ext%2Cgreek&#038;ver=3.7.1' type='text/css' media='all' />
    <link rel='stylesheet' id='foundation-css'  href='css/foundation.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='flexslider-css'  href='css/flexslider.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='qtip-css'  href='css/jquery.qtip.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='custom-scrollbar-css'  href='css/jquery.mCustomScrollbar.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='ci-style-css'  href='css/style.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='mediaqueries-css'  href='css/mediaqueries.css?ver=1.0' type='text/css' media='screen' />
    <link rel='stylesheet' id='ci-color-scheme-css'  href='css/default.css?ver=3.7.1' type='text/css' media='all' />
    <script type='text/javascript' src='js/modernizr-2.6.2.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.js?ver=1.10.2'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>
    <script type='text/javascript' src='js/jquery.flexslider-2.1-min.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.equalHeights.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jRespond.min.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.jpanelmenu.min.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.smooth-scroll.min.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.qtip.min.js?ver=3.7.1'></script>
    <script type='text/javascript' src='js/jquery.mCustomScrollbar.min.js?ver=3.7.1'></script>



    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon.png" />
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-39820613-1', 'hackmemphis.com');
        ga('send', 'pageview');

    </script>
    <style type="text/css">
        #header {
            background: url("images/pattern.png") repeat-x scroll center top #eee;
            height:80px;
        }
        #page {
            margin-top:50px;
        }
        #nav ul {
            padding-top:10px;
        }

        #navigation > li > .btn.register, #navigation > li > .btn.register:visited, #btop, #btop:visited, .flex-direction-nav .flex-next, .flex-direction-nav .flex-prev, input[type="submit"], .btn, .btn:visited, .wpcf7 input[type="submit"] {
            background-color:#e86724;
        }
        a, a:visited, a:focus {
            color:#e86724;
        }</style>
    @yield('header')
</head>
<body class="home blog ci-ignitionconf ci-ignitionconf-1-0">
<div id="mobile-bar">
    <a class="menu-trigger" href="#"></a>
    <h1 class="logo"><a href="/"><img src="images/hack-memphis-top.png" alt="HACKmemphis.com" /></a></h1></div>

<div id="page">
    <header id="header">
        <div class="row">
            <hgroup class="logo three columns">
                <h1><a href="/"><img src="images/hack-memphis-top.png" alt="HACKmemphis.com" /></a></h1>
            </hgroup>
            <nav id="nav">
                <ul id="navigation" class="sf-menu group">
                    <li><a class="scroll" href="#page">Home</a></li>
                    <li><a class="scroll" href="#about">About</a></li>
                    {{--{% if hackevents|length > 0 %}--}}
                    {{--<li><a class="scroll" href="#events">Events</a></li>--}}
                    {{--{% endif %}--}}
                    <li><a class="scroll" href="#sponsors">Sponsors</a></li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
                    <li><a class="" target="_blank" href="http://hackmemphis2014.peatix.com"><strong>Tickets SOLD OUT</strong></a></li>

                </ul><!-- #navigation -->
            </nav><!-- #nav -->
        </div> <!-- .row < #header -->
    </header>

    <div class="container">

        {{--{% block content %}--}}
        <div id="sliders">

            <div id="image-slider" class="flexslider">
                <ul class="slides group">
                    <li><img src="images/Memphis_from_the_Air_04.jpg" class="attachment-full wp-post-image" alt="Memphis_from_the_Air_04" /></li>
                </ul>
            </div>

            <div id="main-slider" class="flexslider">
                <ul class="slides group">
                    <li>
                        <div class="slide-content">
                            <span class="head">Make Tech Happen</span>
                            <h2 class="slide-title">HACKmemphis</h2>
                        <span class="sub-head">Bringing together local tech communities to develop hardware and software projects in Memphis. <br />
                            <a href="http://hackmemphis2014.peatix.com/" target="_blank">Tickets SOLD OUT! for HACKmemphis 2014! September 19-21!</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

        </div> <!-- #sliders -->


        @include('sections.about')

        @include('sections.sponsors')

        @include('sections.contact')

        @include('sections.events')




        <a href="#" id="btop">Back to Top</a>

    </div> <!-- #page -->
    <!-- Footer -->
    <script type='text/javascript' src='js/scripts.js?ver=1.0'></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/selectivizr-min.js"></script>
    <![endif]-->
    @yield('footer')
    </div>
</body>
</html>