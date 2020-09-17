@extends('layouts.template')
@section('main')
    <!--Main index : Begin-->
    <main class="main index">
        <!--Home slider : Begin-->
        {{--        <section class="home-slidershow">--}}
        {{--            <div class="slide-show">--}}
        {{--                <div class="vt-slideshow">--}}
        {{--                    <ul>--}}
        {{--                        <li class="slide1" data-transition="random">--}}
        {{--                            <img src="{{asset('template/images/slider/home/bg_slider_1.png')}}" alt=""/>--}}
        {{--                            <video src="{{asset('template/images/slider/home/bg_slider_1.mp4')}}"></video>--}}
        {{--                            <video controls>--}}
        {{--                                <source src="{{asset('template/images/slider/home/bg_slider_1.mp4')}}" type="video/mp4">--}}
        {{--                            </video>--}}
        {{--                            <div style=" display: flex;--}}
        {{--                            flex-flow: column wrap;--}}
        {{--                            align-content: center;--}}
        {{--                            justify-content: center;--}}
        {{--                            /*height:598px;*/--}}
        {{--    color: #000000;--}}
        {{--    font-weight: bold;">--}}
        {{--                                <h4 style="font-size: 30px; text-align: center;">Welcome to</h4>--}}
        {{--                                <div style="text-align: center;">--}}
        {{--                                    <div style="font-size: 50px;">Global Plus Publishing</div>--}}
        {{--                                    <small style="font-size: 20px">Your search for quality ends here...</small>--}}
        {{--                                </div>--}}
        {{--                                <div style="font-size: 25px; padding-top: 20px; font-weight: normal; ">Exceptional Printing | Detailed Planning | Proof-Reading | Light Packaging</div>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfr" data-x="right" data-hoffset="-56" data-y="170" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">Clients</span> & Growth</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfb" data-x="right" data-hoffset="-15" data-y="225" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300"--}}
        {{--                            >--}}
        {{--								<span class="style2">--}}
        {{--                                    We value all business relationship as a life partnership.<br>--}}
        {{--                                    At GPP are committed to providing quality <br>--}}
        {{--                                    services to ensure that our clients succeed in their <br>--}}
        {{--                                    corporation and personal projects. <br>--}}
        {{--                                    Our client means success to us.<br>--}}
        {{--								</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfr" data-x="right" data-hoffset="-315" data-y="375"--}}
        {{--                                 data-start="1300" data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a--}}
        {{--                                    class="btn-sn" href="#">buy now</a></div>--}}
        {{--                        </li>--}}
        {{--                        <li class="slide2" data-transition="random"><img--}}
        {{--                                src="{{asset('template/images/slider/home/bg_slider_2.png')}}" alt=""/>--}}
        {{--                            <div class="tp-caption lfr" data-x="left" data-hoffset="" data-y="170" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">Capability</span> & Capacity</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300">--}}
        {{--								<span class="style2">--}}
        {{--									Our press is ranked amongst the best in africa.<br>--}}
        {{--									With a combined press capacity of 203,000 impressions per <br>--}}
        {{--									hour we can print 24 million books annually.<br>--}}
        {{--								</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfr" data-x="left" data-y="367" data-start="1300" data-speed="2000"--}}
        {{--                                 data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn" href="#">buy now</a>--}}
        {{--                            </div>--}}
        {{--                        </li>--}}
        {{--                        <li class="slide3" data-transition="random"><img--}}
        {{--                                src="{{asset('template/images/slider/home/bg_slider_3.png')}}" alt=""/>--}}
        {{--                            <div class="tp-caption lft" data-x="left" data-hoffset="" data-y="170" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300"><span class="style1"><span class="textcolor">Experience</span> & Support</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfb" data-x="left" data-hoffset="" data-y="225" data-start="800"--}}
        {{--                                 data-speed="2000" data-endspeed="300">--}}
        {{--								<span class="style2">--}}
        {{--									At GPP you are guaranteed an experience that is more than<br>--}}
        {{--                                    print. Beyond prints, we provide consulting services, <br>--}}
        {{--                                    helping you choose the best materials, finishing and job<br>--}}
        {{--									planning to complement your ideas and bring out the best<br>--}}
        {{--									of what you want to achieve within your budget and<br>--}}
        {{--                                    time frame.--}}
        {{--								</span>--}}
        {{--                            </div>--}}
        {{--                            <div class="tp-caption lfl" data-x="left" data-hoffset="" data-y="365" data-start="1300"--}}
        {{--                                 data-speed="2000" data-easing="easeInOutQuint" data-endspeed="300"><a class="btn-sn"--}}
        {{--                                                                                                       href="#">buy--}}
        {{--                                    now</a></div>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}


        <section id="background-section">
{{--            <video id="background-video" autoplay--}}
{{--                   muted loop>--}}
{{--                <source src="{{asset('template/images/slider/home/bg_slider_1.mp4')}}" type="video/mp4">--}}
{{--            </video>--}}
            <div id="background-video"></div>
            <div class="background-text">
                <h4>Welcome to</h4>
                <div>
                    <div class="name">Global Plus Publishing</div>
                    <small class="mantra pull-right">Bring your imaginations to life...</small>
                </div>
                {{--                <div class="service-brief">--}}
                {{--                    Exceptional Printing | Detailed Planning | Proof-Reading | Light Packaging--}}
                {{--                </div>--}}
            </div>
        </section>
        <!--Home ours service : Begin -->
        <section class="our-service">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">our services</h2>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                        <span class="sub-title">Choose the design path that is right before upload file</span>
                    </div>
                    <div class="or-service-w">
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="#">
                                    <img src="{{asset('template/images/our_service/1.png')}}" alt="service-01"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="#">Printing</a>
                            </div>
                            <div class="or-text">
                                <p>
                                    let us design your next print project!
                                </p>
                            </div>
                            <a href="#" class="btn-readmore order-now">Order now</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="#">
                                    <img src="{{asset('template/images/our_service/2.png')}}" alt="service-02"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="#">Planning</a>
                            </div>
                            <div class="or-text">
                                <p>
                                    Delivery, we can hand it all for you!
                                </p>
                            </div>
                            <a href="#" class="btn-readmore order-now">Order now</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="#">
                                    <img src="{{asset('template/images/our_service/3.png')}}" alt="service-03"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="#">Proof-reading</a>
                            </div>
                            <div class="or-text">
                                <p>
                                    we'll bring all your creative ideas to life!
                                </p>
                            </div>
                            <a href="#" class="btn-readmore order-now">Order now</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="#">
                                    <img src="{{asset('template/images/our_service/4.png')}}" alt="service-04"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="#">Light Packaging</a>
                            </div>
                            <div class="or-text">
                                <p>
                                    we'll if your file is ready to print!
                                </p>
                            </div>
                            <a href="#" class="btn-readmore order-now">Order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Home Trust : Begin-->
        <section class="trust-w hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
                        <div class="tr-icon"><i class="fa fa-thumbs-up"></i></div>
                        <div class="tr-text">
                            <h3>Quality Printing</h3>
                            <span class="tr-line"></span>
                            <p>Bright inks. Thick Paper. Precise cuts. We believe that quality printing matters. That
                                quality printing matters.</p>
                            <a href="#" class="btn-readmore" title="Quality Printing">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-time-delivery">
                        <div class="tr-icon"><i class="fa fa-paper-plane"></i></div>
                        <div class="tr-text">
                            <h3>Timely Delivery</h3>
                            <span class="tr-line"></span>
                            <p>No printer is faster. Order today by 8:00pm EST and you can even get it tomorrow.</p>
                            <a href="#" class="btn-readmore" title="Timely Delivery">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-minded">
                        <div class="tr-icon"><i class="fa fa-leaf"></i></div>
                        <div class="tr-text">
                            <h3>Capability</h3>
                            <span class="tr-line"></span>
                            <p>
                                On a monthly basis we make 500 Thousand bindings, 5 Million stitches, and over 20
                                Million impressions.
                            </p>
                            <a href="#" class="btn-readmore" title="Capability">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-money">
                        <div class="tr-icon"><i class="fa fa-money"></i></div>
                        <div class="tr-text">
                            <h3>Value Guaranteed</h3>
                            <span class="tr-line"></span>
                            <p>
                                Most sellers work with buyers to quickly resolve issues, but if a solution isn't
                                reached, we can help.
                            </p>
                            <a href="#" class="btn-readmore" title="Eco-Minded">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Home Trust : End-->

        <!--Home blog : Begin -->
        <section class="home-blog">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title" style="color: black !important;">recent blog post</h2>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                    </div>
                    <div class="blog-content-w" id="blog-content-w">
                        <div class="slider">
                            <div class="slider-inner">
                                <div class="wrap-item">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/1.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Bright inks. Thick Paper. Precise cuts. We believe that quality
                                                        printing matters. That
                                                        quality printing matters.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Bright inks. Thick Paper. Precise cuts. We believe that quality
                                                        printing matters. That
                                                        quality printing matters.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/2.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/3.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Bright inks. Thick Paper. Precise cuts. We believe that quality
                                                        printing matters. That
                                                        quality printing matters.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Bright inks. Thick Paper. Precise cuts. We believe that quality
                                                        printing matters. That
                                                        quality printing matters.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/4.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-item">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/1.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/2.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/3.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/4.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-item">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/1.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/2.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                        <div class="inner">
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/3.png')}}" alt="blog-01"/>
                                            </a>
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                    </p>
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                        <div class="inner">
                                            <div class="info">
                                                <div class="title">
                                                    <a href="#">Happy Holidays Photo Cards</a>
                                                </div>
                                                <div class="sub-title">
                                                    <p>
                                                        Choose options that you want for your prints.We will make you
                                                        happy with your
                                                        choices.
                                                </div>
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                            <a class="image" href="#">
                                                <img src="{{asset('template/images/blog/4.png')}}" alt="blog-01"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Home make print : Begin -->
        <section class="home-make-print">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">HOW WE MAKE PRINTING EASY</h2>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                    </div><!--make print Title : End -->
                    <div class="print-content">
                        <div class="col-md-4 col-sm-4 print-block print-block-left">
                            <div class="w-print-block frist">
                                <div class="print-icon">
                                    <i class="fa fa-hand-o-up"></i>
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <div class="print-title">
                                    <a href="#">Select Options</a>
                                </div>
                                <div class="print-number">
                                    <span>01</span>
                                </div>
                                <div class="print-txt">
                                    <p>Choose options that you want for your prints.We will make you happy with your
                                        choices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 print-block print-block-center">
                            <div class="w-print-block">
                                <div class="print-icon">
                                    <i class="fa fa-file-text-o"></i>
                                    <i class="fa fa-arrow-circle-o-up"></i>
                                </div>
                                <div class="print-title">
                                    <a href="#">Upload your design</a>
                                </div>
                                <div class="print-number">
                                    <span>02</span>
                                </div>
                                <div class="print-txt">
                                    <p>Upload your finished design here and we'll print it for you with your choices</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 print-block print-block-right">
                            <div class="w-print-block">
                                <div class="print-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="print-title">
                                    <a href="#">Checkout & Order</a>
                                </div>
                                <div class="print-number">
                                    <span>03</span>
                                </div>
                                <div class="print-txt">
                                    <p>Checkout and finish your order very easy with one step checkout extension.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--        <div class="bg_make_print">--}}

            {{--        </div>--}}
        </section>
        <!--Home capabilitie : Begin -->
        <section class="home-capabititie">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">our capabilities</h2>
                        <span class="sub-title">Content not available</span>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                    </div>
                    <div class="block-capabititie-w">
                        <div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
                            <div class="cap-circle circle-one">
                                <div class="cap-outter-circle">
                                    <div class="cap-inner-circle circle-one">
                                        70M+
                                    </div>
                                </div>
                            </div>
                            <h2 class="title" style="text-align: center;">Jobs Delivered</h2>
                            <div class="decs">
                                <p>Since Inception</p>
                            </div>
                        </div>
                        <div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
                            <div class="cap-circle circle-two">
                                <div class="cap-outter-circle">
                                    <div class="cap-inner-circle circle-two">
                                        1000+
                                    </div>
                                </div>
                            </div>
                            <h2 class="title">Client Served</h2>
                            <div class="decs">
                                <p>Corporate & Individual Clients</p>
                            </div>
                        </div>
                        <div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
                            <div class="cap-circle circle-three">
                                <div class="cap-outter-circle">
                                    <div class="cap-inner-circle circle-three">
                                        97%
                                    </div>
                                </div>
                            </div>
                            <h2 class="title">Approval Rating</h2>
                            <div class="decs">
                                <p>Our customers always come back</p>
                            </div>
                        </div>
                        <div class="block-capabititie col-md-3 col-sm-3 col-xs-12">
                            <div class="cap-circle circle-four">
                                <div class="cap-outter-circle">
                                    <div class="cap-inner-circle circle-four">
                                        98%
                                    </div>
                                </div>
                            </div>
                            <h2 class="title">On time Delivery</h2>
                            <div class="decs">
                                <p>Our Culture for years past and now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Home out recent : Begin -->
    {{--        <section class="home-out-recent">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="block-title-w">--}}
    {{--                        <h2 class="block-title">OUR RECENT WORKS</h2>--}}
    {{--                        <span class="icon-title">--}}
    {{--							<span></span>--}}
    {{--							<i class="fa fa-star"></i>--}}
    {{--						</span>--}}
    {{--                    </div>--}}
    {{--                    <div class="tab-content">--}}
    {{--                        <div class="tab-pane active" id="tab11">--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/5.png')}}" alt="service-05"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/6.png')}}" alt="service-06"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/7.png')}}" alt="service-07"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/8.png')}}" alt="service-08"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/9.png')}}" alt="service-09"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-4 col-sm-6 col-xs-6 block-recent">--}}
    {{--                                <div class="w-block-recent">--}}
    {{--                                    <div class="image-recent">--}}
    {{--                                        <a href="#">--}}
    {{--                                            <img src="{{asset('template/images/our_service/10.png')}}"--}}
    {{--                                                 alt="service-10"/>--}}
    {{--                                        </a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="info-recent">--}}
    {{--                                        <h2 class="title">Postcards</h2>--}}
    {{--                                        <div class="text-recent">--}}
    {{--                                            <p>--}}
    {{--                                                Welcome to Global Plus Publishing, this content is yet to be filled--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                        <a href="#" class="read-more">read more</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}

    <!--Home Testimonials : Begin -->
        <section class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="tes-block" id="testimonial">
                        <div class="slider-inner">
                            <div class="wrap-item">
                                <div class="item">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="{{asset('template/images/testimonials/1.png')}}"
                                                 alt="terminal-01"/>
                                        </div>
                                        <div class="tes-name">
                                            Mr Ali Okunade
                                        </div>
                                        <div class="tes-job">
                                            <span>Publisher, Atlantic Books</span>
                                        </div>
                                        <div class="tes-decs">
                                            <p>The print quality by far surpasses my previous productions and I have
                                                come to stay. I would absolutely recommend Global Plus Publishing to
                                                other publishers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="{{asset('template/images/testimonials/2.jpg')}}"
                                                 alt="terminal-01"/>
                                        </div>
                                        <div class="tes-name">
                                            Olatunde Shobajo
                                        </div>
                                        <div class="tes-job">
                                            <span>General Manager, HIIT Publication</span>
                                        </div>
                                        <div class="tes-decs">
                                            <p>I am happy and excited with the professional touch given, in terms of the
                                                graphics designs, quality and delivery. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="{{asset('template/images/testimonials/3.jpg')}}"
                                                 alt="terminal-01"/>
                                        </div>
                                        <div class="tes-name">
                                            Okey Bakassi
                                        </div>
                                        <div class="tes-job">
                                            <span>Publisher, MEMORIES OF AN AFRICAN COMEDIAN</span>
                                        </div>
                                        <div class="tes-decs">
                                            <p>I applaud the professionalism and detailed attention given to this book.
                                                I am really impressed and happy.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="our-clients">
                        <div class="our-clients">
                            <div class="inner">
                                <ul class="our-clients-list">
                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/1.png')}}" alt="brand-01"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/2.png')}}" alt="brand-02"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/3.png')}}" alt="brand-03"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/4.png')}}" alt="brand-04"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/5.png')}}" alt="brand-05"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/6.png')}}" alt="brand-06"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/7.png')}}" alt="brand-07"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/8.png')}}" alt="brand-08"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/9.png')}}" alt="brand-09"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/10.png')}}" alt="brand-10"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/11.png')}}" alt="brand-11"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/12.png')}}" alt="brand-12"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/13.jpg')}}" alt="brand-13"/>
                                    </li>

                                    <li class="list-item">
                                        <img src="{{asset('template/images/brands/14.jpg')}}" alt="brand-14"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
{{--@include('pages.registration_modal')--}}
@section('script')
    <script type="text/javascript">
        $(window).bind("load", function () {
            $('#background-video').load("{{url('/video')}}");
        });


                $(document).ready(function(){
                    $('.background-text  .mantra').hide().fadeIn(5000);
        {{--            // $(window).scroll(function() {--}}
        {{--            //     var hT = $('.our-service').offset().top,--}}
        {{--            //         hH = $('.our-service').outerHeight(),--}}
        {{--            //         wH = $(window).height(),--}}
        {{--            //         wS = $(this).scrollTop();--}}
        {{--            //     if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){--}}
        {{--            //         $('#registration_modal').modal()--}}
        {{--            //     }--}}
        {{--            // });--}}

        {{--            $('.our-service').on('mouseenter', function(){--}}
        {{--                $('#registration_modal').modal('show')--}}
        {{--            });--}}

                })
    </script>
@endsection
