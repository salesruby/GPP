@extends('layouts.template')
@section('main')

    <!--Main index : Begin-->
    <main class="main index">
        <section id="background-section">
            <div id="background-video"></div>
            <div class="background-text">
                <h4>Welcome to</h4>
                <div>
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
                        <span class="sub-title">Choose the design and we willl bring your imagination to reality</span>
                    </div>
                    <div class="or-service-w">
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_publication')}}">
                                    <img src="{{asset('template/images/our_service/1.png')}}" alt="service-01"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_publication')}}">Books, Publication & Dairies</a>
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
                                <a href="{{url('/our-services#service_commercial')}}">
                                    <img src="{{asset('template/images/our_service/2.png')}}" alt="service-02"/>
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
                                    <img src="{{asset('template/images/our_service/3.png')}}" alt="service-03"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_finishing')}}">Specialized Finishing</a>
                            </div>
                            <div class="text">
                                <p>
                                    Binding, Saddle Stitching, Embossing, Lamination, Foiling
                                </p>
                            </div>
                            <a href="{{route('quote.create')}}" class="btn-readmore order-now">Request for quote</a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                            <div class="or-image">
                                <a href="{{url('/our-services#service_packaging')}}">
                                    <img src="{{asset('template/images/our_service/4.png')}}" alt="service-04"/>
                                </a>
                            </div>
                            <div class="or-title">
                                <a href="{{url('/our-services#service_packaging')}}">Light Packaging</a>
                            </div>
                            <div class="text">
                                <p>
                                    Paper bags packaging, Box pack customization
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
                            <h3>Quality Printing</h3>
                            <span class="tr-line"></span>
                            <p>Bright inks. Thick Paper. Precise cuts. We believe that quality printing matters. That
                                quality printing matters.</p>
                            {{--                            <a href="#" class="btn-readmore" title="Quality Printing">Read more</a>--}}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-time-delivery">
                        <div class="tr-icon tr-icon2"><i class="fa fa-paper-plane"></i></div>
                        <div class="tr-text">
                            <h3>Timely Delivery</h3>
                            <span class="tr-line"></span>
                            <p>No printer is faster. Order today by 8:00pm EST and you can even get it tomorrow.</p>
                            {{--                            <a href="#" class="btn-readmore" title="Timely Delivery">Read more</a>--}}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-minded">
                        <div class="tr-icon tr-icon3"><i class="fa fa-leaf"></i></div>
                        <div class="tr-text">
                            <h3>Capability</h3>
                            <span class="tr-line"></span>
                            <p>
                                On a monthly basis we make 500 Thousand bindings, 5 Million stitches, and over 20
                                Million impressions.
                            </p>
                            {{--                            <a href="#" class="btn-readmore" title="Capability">Read more</a>--}}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 block-trust trust-col-eco-money">
                        <div class="tr-icon tr-icon4"><i class="fa fa-money"></i></div>
                        <div class="tr-text">
                            <h3>Value Guaranteed</h3>
                            <span class="tr-line"></span>
                            <p>
                                Most sellers work with buyers to quickly resolve issues, but if a solution isn't
                                reached, we can help.
                            </p>
                            {{--                            <a href="#" class="btn-readmore" title="Eco-Minded">Read more</a>--}}
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
                                                        <img src="/new/gpp/public/store/{{$blog->attachment}}"
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

                                                        <img src="/new/gpp/public/store/{{$blog->attachment}}"
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
            {{--        <div class="bg_make_print">--}}

            {{--        </div>--}}
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
                <div class="row" style="display: flex; flex-flow: row wrap;">
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

        $(document).ready(function () {
            $('.background-text  .mantra').hide().fadeIn(5000);
            // $(window).scroll(function () {
            //     var hT = $('.our-service').offset().top,
            //         hH = $('.our-service').outerHeight(),
            //         wH = $(window).height(),
            //         wS = $(this).scrollTop();
            //     if (wS > (hT + hH - wH) && (hT > wS) && (wS + wH > hT + hH)) {
            //         alert('Test 123456');
            //     }
            // });
        })
    </script>
@endsection
