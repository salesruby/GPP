@extends('layouts.template')
@section('main')
    <!--Main index : Begin-->
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Our Services</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Services</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="aboutus" class="pr-main">
            <div class="container" id="service_publication">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big1.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Books and Publications</span></h2>
                        <p>
                            At Global Plus Publishing, we specialize in the printing of Educational books for
                            Pre-school, Primary, Secondary, and Tertiary textbooks, hard case books, biographies, and
                            other publications.</p>
                    </div>
                </div>
            </div>

            <div class="container" id="service_periodical">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Periodicals</span></h2>
                        <p>
                            Magazines, devotionals, scholarly journals, newspapers, newsletters, or any other print
                            material published at regular intervals, at any quantity while not compromising on
                            quality.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big5.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container" id="service_commercial">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big2.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Commercial Products</span></h2>
                        <p>
                            A perfectly executed job would lead to more patronage and referrals, this is why we give
                            each job our very best. From flyers to corporate gifts, business cards, diaries, calendars,
                            and all your corporate branding needs, we have the expertise to deliver beyond expectations.
                            Have you got branding needs? Reach out to us.</p>
                    </div>
                </div>
            </div>


            <div class="container" id="service_confidential">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Confidential Printing</span></h2>
                        <p>
                            Whatever your printing needs, we can be discrete while delivering the highest standards of
                            quality printing</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big6.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container" id="service_finishing">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big3.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Specialized Finishing</span></h2>
                        <p>
                            How do you like your print? Folded, laminated, die-cut, perforated, saddle-stitched,
                            embossed? Name it and we would have it done. Our equipment is state of the art and suited to
                            delivering the best quality because you deserve the best.</p>
                    </div>
                </div>
            </div>

            <div class="container" id="service_packaging">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Light Packaging</span></h2>
                        <p style="line-height: 2em;">
                            Thinking Paper bags packaging, product package branding, and light packaging of any form?
                            Think Global Plus!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big4.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
@section('script')
@endsection
