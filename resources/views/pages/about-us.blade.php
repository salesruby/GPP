@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">About Us</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>About Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="pr-main">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <video controls>
                        <source src="{{asset('template/video/_gpp_Trim4.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top"><h2><span>Welcome to Global Plus Publishing</span></h2>
                        <p>
                            We are a world-class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialties include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines, other periodicals to books, calendars, annual reports, journals, brochures
                            and promotional materials like posters, fliers, leaflets.</p>
                        <p>
                            Incorporated in February 2004 and having commenced full commercial operation in January
                            2007, we have taken on the challenge of building and promoting best practices in the
                            printing industry.

                        </p>
                    </div>

                    <div class="top"><h2><span>Vision Statement</span></h2>
                        <p>
                            To be the standard of Printing Services in Nigeria, Africa, and be ranked amongst the best
                            in the world. This we do by providing excellent print services to our customers.
                        </p>
                    </div>

                    <div class="top">
                        <h2>
                            <span>Our Award <small><strong>- International Arch of Europe for Quality Award</strong></small></span>
                        </h2>
                        <p>
                            GPP is the proud winner of the 2009 Arch of Europe award for quality and Excellence - Gold
                            category, received in Frankfurt, Germany; and also the 2010 Century Quality Awards -
                            Platinum category, received in Geneva, Switzerland. Whatever size project you have to
                            tackle, you can count on GPP experts every step of the way.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
