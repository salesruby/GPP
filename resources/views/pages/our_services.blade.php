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
                    <div class="top"><h2><span>Books, Publications and Diaries</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
                    </div>
                </div>
            </div>

            <div class="container" id="service_commercial">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Commercial Products</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big2.png')}}" alt="service-01"/>
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
                    <div class="top" ><h2><span>Specialized Finishing</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
                    </div>
                </div>
            </div>

            <div class="container" id="service_packaging">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Light Packaging</span></h2>
                        <p style="line-height: 2em;">
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
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

            <div class="container" id="service_periodical" >
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="or-image">
                        <a href="#">
                            <img src="{{asset('template/images/our_service/big5.png')}}" alt="service-01"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Periodicals</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
                    </div>
                </div>
            </div>

            <div class="container" id="service_confidential">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>Confidential Printing</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
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
        </section>
    </main>
    <!--Main index : End-->
@endsection
@section('script')
@endsection
