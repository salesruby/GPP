<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Global Plus Publishing - Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
    <meta name="description" content="Global Plus Publishing">
    <meta name="author" content="GPP">
    <!--Add css lib-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arimo:500,300,700,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:500,300,700,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
{{--    Animation css--}}

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style-main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/sweetalert2.min.css')}}">
    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}"/>

</head>
<body>
<!--Header: Begin-->
<header>
    @include('layouts.social_links')
    <!--Main Header: Begin-->
    <section class="main-header" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 w-logo">
                    <div class="logo hd-pd ">
                        <a href="{{route('welcome')}}">
                            <img src="{{asset('template/images/logo.png')}}" alt="printshop logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 visible-md visible-lg">
                    <nav id="main-menu" class="main-menu clearfix" >
                        <ul>
                            <li class="level0 parent col1 all-product hd-pd {{(request()->is('/'))?'active':''}}">
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li class="level0 parent col1 hd-pd">
                                <a href="javascript:void(0)" title="Services">
                                    Services
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="level0">
                                    <li class="level1 nav-1-1 first item">
                                        <a href="{{url('/our-services#service_publication')}}" title="Books & Publications">Books & Publications</a>
                                    </li>
                                    <li class="level1 nav-1-6 item">
                                        <a href="{{url('/our-services#service_periodical')}}" title="Periodicals">Periodicals</a>
                                    </li>
                                    <li class="level1 nav-1-8 item">
                                        <a href="{{url('/our-services#service_commerial')}}" title="Commercial Products">Commercial Products</a>
                                    </li>
                                    <li class="level1 nav-1-9 last item">
                                        <a href="{{url('/our-services#service_confidential')}}" title="Confidential Printing">Confidential Printing</a>
                                    </li>
                                    <li class="level1 nav-1-1 first item">
                                        <a href="{{url('/our-services#service_finishing')}}" title="Specialized Finishing">Specialized Finishing</a>
                                    </li>
                                    <li class="level1 nav-1-1 first item">
                                        <a href="{{url('/our-services#service_packaging')}}" title="Light Packaging">Light Packaging</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="level0 hd-pd {{(request()->is('about-us'))?'active':''}}" title="About Us">
                                <a href="{{route('about-us')}}">About Us</a>
                            </li>
                            <li class="level0 hd-pd" title="Contact Us">
                                <a href="{{route('contact-us')}}">Contact Us</a>
                            </li>
                            <li class="level0 hd-pd" title="Shop">
                                <a href="{{route('shop')}}">Shop</a>
                            </li>

{{--                            <li class="level0 hd-pd" title="Login">--}}
{{--                                <a href="{{route('login')}}">Login</a>--}}
{{--                            </li>--}}

{{--                            <li class="level0 hd-pd" title="Register">--}}
{{--                                <a href="{{route('register')}}">Register</a>--}}
{{--                            </li>--}}
                            <li class="level0 hd-pd"  title="Request for Quote">
                                <a  href="{{route('quote.create')}}"><button class="btn" id="request-quote-btn">Request for Quote</button></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="pull-right col-sm-1 col-sm-offset-5 col-xs-offset-2 col-xs-2 visible-sm visible-xs mbmenu-icon-w">
						<span class="mbmenu-icon hd-pd">
							<i class="fa fa-bars"></i>
						</span>
                </div>
            </div>
        </div>
    </section>
    <!--Main Header: End-->
</header>
<!--Header: End-->

<!--Main index : Begin-->
@yield('main')
<!--Main index : End-->

<!--Footer : Begin-->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
                    <h2>Contact Us</h2>
                    <div class="footer-content">
                        <a href="{{route('welcome')}}" title="Cmsmart logo footer" class="logo-footer">
                            <img src="{{asset('template/images/logo.png')}}" alt="logo footer">
                        </a>
                        <ul class="info">
                            <li>
                                <i class="fa fa-home"></i>
                                <span>3 Adebayo Akande St, Oregun, Ikeja, Lagos</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>+234 812 713 8282</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span><a href="mailto:webservices@globalplusonline.com" title="send mail to GPP">webservices@globalplusonline.com</a></span>
                            </li>
                        </ul>
                        <ul class="footer-social">
                            <li>
                                <a href="https://web.facebook.com/globalpluspub" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/globalplus_pub" title="Twiter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/globalpluspub/" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/company/global-plus-publishing" title="Instagram">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/embed/hWz_BEYa3To'" title="Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 corporate footer-col">
                    <h2>Corporate</h2>
                    <div class="footer-content">
                        <ul>
                            <li>
                                <a href="{{route('about-us')}}" title="About us">About</a>
                            </li>
                            <li>
                                <a href="{{route('career')}}" title="Career">Career</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="#" title="Terms of Service">Terms of Service</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" title="Privacy Policy">Privacy Policy</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
                    <h2>Support</h2>
                    <div class="footer-content">
                        <ul>
                            <li>
                                <a href="{{route('login')}}" title="My Account">My Account</a>
                            </li>
{{--                            <li>--}}
{{--                                <a href="#" title="FAQ">FAQ</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" title="Design Service">Design Services</a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="{{route('contact-us')}}" title="Contact Us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 other-info footer-col hidden-sm">
                    <h2>Other Info</h2>
                    <div class="footer-content">
                        <p>
                            Global Plus Publishing provides fast online printing for both homes and businesses. We
                            provide high
                            quality business cards, postcards, flyers, brochures, stationery and other premium online
                            print products.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copy-right text-center">Copyright © {{\Carbon\Carbon::now()->year}} <a
                            href="{{url('https://globalplusonline.com/')}}" title="Cmsmart - Magento theme">globalplusonline.com</a>.
                        All Rights Reserved</p>
                    <a href="#" id="back-to-top">
                        <i class="fa fa-chevron-up"></i>
                        Top
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="sitebodyoverlay"></div>
<nav id="mb-main-menu" class="main-menu">
    <div class="mb-menu-title">
        <h3>Navigation</h3>
        <span id="close-mb-menu">
				<i class="fa fa-times-circle"></i>
			</span>
    </div>
    <ul class="cate_list">
        <li class="level0 parent col1 all-product hd-pd {{(request()->is('/'))?'active':''}}">
            <a href="{{route('welcome')}}">Home</a>
        </li>
        <li class="level0 parent col1 hd-pd">
            <a href="javascript:void(0)" title="Services">
                Services
                <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="level0">
                <li class="level1 nav-1-1 first item">
                    <a href="{{url('/our-services#service_publication')}}" title="Books & Publications">Books & Publications</a>
                </li>
                <li class="level1 nav-1-6 item">
                    <a href="{{url('/our-services#service_periodical')}}" title="Periodicals">Periodicals</a>
                </li>
                <li class="level1 nav-1-8 item">
                    <a href="{{url('/our-services#service_commerial')}}" title="Commercial Products">Commercial Products</a>
                </li>
                <li class="level1 nav-1-9 last item">
                    <a href="{{url('/our-services#service_confidential')}}" title="Confidential Printing">Confidential Printing</a>
                </li>
                <li class="level1 nav-1-1 first item">
                    <a href="{{url('/our-services#service_finishing')}}" title="Specialized Finishing">Specialized Finishing</a>
                </li>
                <li class="level1 nav-1-1 first item">
                    <a href="{{url('/our-services#service_packaging')}}" title="Light Packaging">Light Packaging</a>
                </li>
            </ul>
        </li>
        <li class="level0 hd-pd {{(request()->is('about-us'))?'active':''}}" title="About Us">
            <a href="{{route('about-us')}}">About Us</a>
        </li>

        <li class="level0 hd-pd" title="Contact Us">
            <a href="{{route('contact-us')}}">Contact Us</a>
        </li>

        <li class="level0 hd-pd" title="Shop">
            <a href="{{route('shop')}}">Shop</a>
        </li>

{{--        <li class="level0 hd-pd" title="Login">--}}
{{--            <a href="{{route('login')}}">Login</a>--}}
{{--        </li>--}}

{{--        <li class="level0 hd-pd" title="Register">--}}
{{--            <a href="{{route('register')}}">Register</a>--}}
{{--        </li>--}}

        <li class="level0 hd-pd" title="Request for Quote">
            <a href="{{route('quote.create')}}">Request for Quote</a>
        </li>
    </ul>
</nav>
<!--Add js lib-->
<script type="text/javascript" src="{{asset('template/js/jquery/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/Chart.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('template/js/doughnutit.js')}}"></script>--}}
<!--   <script type="text/javascript" src="js/jquery.subscribe-better.js"></script> -->
<script type="text/javascript" src="{{asset('template/js/slideshow/jquery.themepunch.revolution.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/slideshow/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/js/theme-home.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/jquery.validator.js')}}"></script>
{{--Animation--}}
<script src="https://unpkg.com/aos@next/dist/aos.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="{{asset('template/js/custom.js')}}" type="text/javascript"></script>

<script type="text/javascript">

    AOS.init();

    (function () {
        var options = {
            whatsapp: "+2348126604977", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
@yield('script')
</body>
</html>

