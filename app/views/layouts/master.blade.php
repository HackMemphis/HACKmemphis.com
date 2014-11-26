<!-- Header -->
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<head>
    @section('header')
        @include('layouts.partials.head')
    @stop
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
                    <li><a class="scroll" href="#sponsors">Sponsors</a></li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
                    <li><a class="" target="_blank" href="http://hackmemphis2014.peatix.com"><strong>Tickets SOLD OUT</strong></a></li>

                </ul><!-- #navigation -->
            </nav><!-- #nav -->
        </div> <!-- .row < #header -->
    </header>

    <div class="container">

        @section('content')
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


            <section id="about">
                <div class="row">
                    <div class="twelve columns">
                        <h1 class="section-title"><span>About</span></h1>
                        <div class="about-text">
                            <p>
                                HACKmemphis is an organization that hosts a weekend hackathon event. We encourage developers and designers of any background (or technology) to come together to work on whatever projects interest them. HACKmemphis is a free form weekend of hacking on software and hardware projects.
                            </p>
                            <p>HACKmemphis is a mutual benefit nonprofit in the state of Tennessee. The
                                inaugural HACKmemphis Hackathon was September 14th &amp; 15th 2013. Our goal is to bring
                                together tech communities to develop hardware and software projects in Memphis. We are currently
                                planning our next event for September 19-21 2014. If you would be interested in volunteering or helping plan please
                                contact <a href="mailto:joe@hackmemphis.com">Joe</a>.
                            </p>
                            <p>HACKmemphis is organized by a group in Memphis comprised of developers, makers, hackers, and
                                local tech community supporters. We all want to see the local tech scene in Memphis thrive.
                                We are a mutual nonprofit organization. This is a nonprofit venture. All money raised goes
                                directly into creating the best event possible.
                            </p>
                        </div>			</div>
                </div> <!-- .row < #about -->
            </section> <!-- #about -->

            <!-- section_sponsors.php start -->
            <section id="sponsors">
                <div class="row">
                    <h1 class="section-title"><span>2014 Sponsors</span></h1>
                    <ul class="sponsor-list">

                        {{--{% for currentSponsor in allSponsors %}--}}
                        {{--{% if '2014' in currentSponsor.year %}--}}
                        {{--<li class="two columns">--}}
                        {{--<a href="{{ currentSponsor.link }}" target="_blank">--}}
                        {{--<img src="{{ currentSponsor.logoPath }}" class="attachment-square wp-post-image" alt="{{ currentSponsor.altText }}" />--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--{% endif %}--}}
                        {{--{% endfor %}--}}

                        <li class="two columns">
                            <a href="" target="_blank">
                                <img src="" class="attachment-square wp-post-image" alt="" />
                            </a>
                        </li>

                    </ul>
                </div> <!-- .row < #sponsors -->
                <div class="row">
                    <h1 class="section-title"><span>2013 Sponsors</span></h1>
                    <ul class="sponsor-list">

                        {{--{% for previousSponsor in allSponsors %}--}}
                        {{--{% if '2013' in previousSponsor.year %}--}}
                        {{--<li class="two columns">--}}
                        {{--<a href="{{ previousSponsor.link }}" target="_blank">--}}
                        {{--<img src="{{ previousSponsor.logoPath }}" class="attachment-square wp-post-image" alt="{{ previousSponsor.altText }}" />--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--{% endif %}--}}
                        {{--{% endfor %}--}}

                        <li class="two columns">
                            <a href="" target="_blank">
                                <img src="" class="attachment-square wp-post-image" alt="" />
                            </a>
                        </li>

                    </ul>
                </div> <!-- .row < #sponsors -->
            </section> <!-- #sponsors -->
            <!-- section_sponsors.php end -->
            <section id="contact">
                <div class="row">
                    <div class="twelve columns">
                        <h1 class="section-title"><span>Contact</span></h1>
                        <div class="about-text">
                            <p>
                                If you would like to help plan or volunteer at HACKmemphis 2014, please contact <a href="mailto:joe@hackmemphis.com">Joe</a>.
                            </p>
                            <p>
                                Follow us on <a href="https://twitter.com/@hackmemphis" target="_blank">Twitter</a>,
                                <a href="https://www.facebook.com/HackMemphis" target="_blank">Facebook</a>,
                                and <a href="https://plus.google.com/u/0/b/104971938203429316985/104971938203429316985/" target="_blank">Google+</a>
                            </p>
                        </div>
                    </div>
                    <div class="twelve columns">
                        <aside id="text-2" class="widget widget_text group">
                            <div class="textwidget">
                                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/HACKmemphis" data-widget-id="344843077044801536">Tweets by @HACKmemphis</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                        </aside>
                    </div>
                </div> <!-- .row < #contact -->
            </section> <!-- #contact -->



        @stop




        <a href="#" id="btop">Back to Top</a>

    </div> <!-- #page -->
    @section('footer')
        @include('layouts.partials.footer-scripts')

</body>
</html>