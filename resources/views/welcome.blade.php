@extends('layouts.template')
@section('main')
    <!--Main index : Begin-->
    <main class="main index">
        <section id="background-section">
            <div id="background-video"></div>
            <div class="background-text">
                <h4 data-aos="fade-down" data-aos-duration="3000">Welcome to</h4>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <div class="name">Global Plus Publishing</div>
                    <small class="mantra pull-right">Bring your imaginations to life...</small>
                </div>
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
                        <span class="sub-title">Your print material is not just a piece of paper; it's your first impression.
                            This is why at Global Plus Publishing, we always strive to bring global publishing standards to you.
                            We  see each brief as an opportunity to form a mutually beneficial relationship.
                        </span>
                    </div>
                    <div class="or-service-w">
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_publication')}}">
                                    <img src="{{asset('template/images/our_service/1.png')}}" alt="service-01"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_publication')}}">Books and Publications</a>
                            </div>
                            <div class="text">
                                <p>
                                    Educational, Textbooks, Year Books, Notepads
                                </p>
                            </div>
                            <a href="{{route('quote.create')}}" class="btn-readmore order-now">Request for quote</a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_periodical')}}">
                                    <img src="{{asset('template/images/our_service/2.png')}}" alt="service-02"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_periodical')}}">Periodicals</a>
                            </div>
                            <div class="text">
                                <p>
                                    Magazines, devotionals, scholarly journals, newspapers and newsletters
                                </p>
                            </div>
                            <a href="{{route('quote.create')}}" class="btn-readmore order-now">Request for quote</a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_commercial')}}">
                                    <img src="{{asset('template/images/our_service/3.png')}}" alt="service-03"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_commercial')}}">Commercial Products</a>
                            </div>
                            <div class="text">
                                <p>
                                    Flyers, Letterheads, Brand Collaterals, Calendars, Corporate Gifts
                                </p>
                            </div>
                            <a href="{{route('quote.create')}}" class="btn-readmore order-now">Request for quote</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_finishing')}}">
                                    <img src="{{asset('template/images/our_service/4.png')}}" alt="service-04"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_finishing')}}">Specialized Finishing</a>
                            </div>
                            <div class="text">
                                <p>
                                    {{--                                    Binding, Saddle Stitching, Embossing, Lamination, Foiling--}}
                                    Binding, Saddle Stitching, Embossing, Lamination (UV, Matt, Gloss), Foiling
                                </p>
                            </div>
                            <a href="{{route('quote.create')}}" class="btn-readmore order-now">Request for quote</a>
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
                        <div class="tr-icon tr-icon1"><i class="fa fa-thumbs-up"></i></div>
                        <div class="tr-text">
                            <h3>Quality</h3>
                            <span class="tr-line"></span>
                            <p>An excellently executed contract is the best form of publicity, and this is why we pay
                                attention to every detail and requirement to the letter. Our press was created as an
                                answer to the need for quality print.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-time-delivery">
                        <div class="tr-icon tr-icon2"><i class="fa fa-paper-plane"></i></div>
                        <div class="tr-text">
                            <h3>Professionalism</h3>
                            <span class="tr-line"></span>
                            <p>Our personnel are highly trained to maintain the highest level of professionalism at all
                                times, giving you a hassle-free experience. We respect deadlines, deliver beyond
                                expectation and offer counsel on the best options for your publishing needs.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-minded">
                        <div class="tr-icon tr-icon3"><i class="fa fa-leaf"></i></div>
                        <div class="tr-text">
                            <h3>Capacity</h3>
                            <span class="tr-line"></span>
                            <p>
                                With a combined press capacity of 203,000 impressions per hour, totaling about 24
                                million books a year, we can boast of being one of Africa’s most efficient high-quality
                                printing presses
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-money">
                        <div class="tr-icon tr-icon4"><i class="fa fa-money"></i></div>
                        <div class="tr-text">
                            <h3>Value Guaranteed</h3>
                            <span class="tr-line"></span>
                            <p>
                                At Global Plus Publishing, we go beyond print. We offer in-house proof-readers, art and
                                graphics consultants, to ensure you get world-class printing services that exceed your
                                expectations. It’s our “Plus” experience!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Home Trust : End-->

        <!--Home blog : Begin -->
        @if(isset($blogs) && !$blogs->isEmpty())
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
                                        @foreach($blogs as $key => $blog)
                                            @if(($key++ % 2) > 0)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item">
                                                    <div class="inner">
                                                        <img src="{{asset('/gpp/public/store/'.$blog->attachment)}}"
                                                             alt="blog-{{$blog->id}}"/>
                                                        <div class="info">
                                                            <div class="title">
                                                                <a href="{{route('blogs.show', $hashIds->encode($blog->id))}}">{{$blog->title}}</a>
                                                            </div>
                                                            <div class="sub-title">
                                                                <p>
                                                                    {{$blog->summary}}
                                                                </p>
                                                            </div>
                                                            <a href="{{route('blogs.show', $hashIds->encode($blog->id))}}"
                                                               class="read-more">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 item item-even">
                                                    <div class="inner">
                                                        <div class="info">
                                                            <div class="title">
                                                                <a href="{{route('blogs.show', $hashIds->encode($blog->id))}}">{{$blog->title}}</a>
                                                            </div>
                                                            <div class="sub-title">
                                                                <p>
                                                                    {{$blog->summary}}
                                                                </p>
                                                            </div>
                                                            <a href="{{route('blogs.show', $hashIds->encode($blog->id))}}"
                                                               class="read-more">Read more</a>
                                                        </div>

                                                        <img src="{{asset('/gpp/public/store/'.$blog->attachment)}}"
                                                             alt="blog-01"/>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endif
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
                                    <p>Start a new printing order based on your options and preferences. Orders can be
                                        placed in person or <a href="{{route('quote.create')}}">click here</a></p>
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
                                    <p>Upload print design (Corel draw, Adobe illustrator or Adobe Photoshop).</p>
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
                                    <p>Enter delivery options and finish the order.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Home capabilitie : Begin -->
        <section class="home-capabititie">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">our capabilities</h2>
                        {{--                        <span class="sub-title"></span>--}}
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
                                        <span>70</span>M+
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
                                        <span class="cap-counter">1000</span>+
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
                                        <span>97</span>%
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
                                        <span>98</span>%
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

        <!--Home Testimonials : Begin -->
        <section class="home-testimonial">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">clients testimonials</h2>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                    </div>

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
                                            Mr. Sunday Obiyinka
                                        </div>
                                        <div class="tes-job">
                                            <span>Managing  Director, Extension Publications</span>
                                        </div>
                                        <div class="tes-decs">
                                            <p>It’s been a fantastic partnership with Global Plus Publishing. They have
                                                a team of dedicated staff who deliver seamless and quality services.</p>
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
                                            <span>Publisher, Memoires of an African Comedian</span>
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
        </section>

        <!--Our Clients : Begin -->
        <section class="our-clients">
            <div class="container">
                <div class="row">
                    <div class="block-title-w">
                        <h2 class="block-title">you are in good hands</h2>
                        <span class="icon-title">
							<span></span>
							<i class="fa fa-star"></i>
						</span>
                        <span class="sub-title">
                            Our print services and solutions are trusted by these brands and 15,000 other businesses in Nigeria.
                        </span>
                    </div>
                    <div class="our-clients-logo">
                        <div class="list-item">
                            <img src="{{asset('template/images/brands/14.png')}}" alt="brand-14"/>
                        </div>
                        <div class="list-item">
                            <img src="{{asset('template/images/brands/15.png')}}" alt="brand-13"/>
                        </div>
                        <div class="list-item">
                            <img src="{{asset('template/images/brands/1.png')}}" alt="brand-01"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/2.png')}}" alt="brand-02"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/3.png')}}" alt="brand-03"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/4.png')}}" alt="brand-04"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/5.png')}}" alt="brand-05"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/6.png')}}" alt="brand-06"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/7.png')}}" alt="brand-07"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/8.png')}}" alt="brand-08"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/9.png')}}" alt="brand-09"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/10.png')}}" alt="brand-10"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/11.png')}}" alt="brand-11"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/12.png')}}" alt="brand-12"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/13.jpg')}}" alt="brand-13"/>
                        </div>

                        <div class="list-item">
                            <img src="{{asset('template/images/brands/16.png')}}" alt="brand-13"/>
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

        // $(document).ready(function(){
        //     // $('.block-capabititie-w').on('mouseover', function () {
        //         $('.cap-counter').counterUp({
        //             delay: 10,
        //             time: 800
        //         });
        //     })
        // });
    </script>
@endsection
