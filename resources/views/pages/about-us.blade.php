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
                        <source src="template/video/GPP & QUARTZ DOCUMENTARY_Trim (2).mp4" type="video/mp4">
                        {{--                        <source src="https://drive.google.com/file/d/1Y2tOg53eHnujWSi_SoYGWgUIR4NUJmr_/view?usp=sharing" type="video/ogg">--}}
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top"><h2><span>Welcome to Global Plus Publishing</span></h2>
                        <p>
                            We are a world class, one stop Print shop with the latest and most sophisticated printing
                            equipment ranging from our Pre-press through Press and to the Post-press (finishing). Our
                            specialty include web, offset and sheet fed printing. GPP handles a wide range of projects
                            from magazines,other periodicals to books, calendars, annual reports, journals, b rochures
                            and promotional materials like posters, fliers, leaflets.</p>
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>MEET THE TEAM</h1>
                    <p>We’re passionate about print, but what does that mean for you? It’s a promise that you’ll always
                        receive </p>
                    <p>print created on a press that sits at the very forefront of printing technology.</p>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div>
                            <img src="{{asset('template/images/abouts/about01.jpg')}}">
                            <h3>Ravindra Chauchan</h3>
                            <h4>General Manager</h4>
                            <p>
                                A dynamic, veteran entrepreneur whose vision in the
                                organizations he manages is to develop a ‘world class’ team that will provide ‘world
                                class’ services to their clientele.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div>
                            <img src="{{asset('template/images/abouts/about02.jpg')}}">
                            <h3>Joy Adeosun</h3>
                            <h4>Head of Human Resources</h4>
                            <p>
{{--                                His wealth of experience in the Print and Publishing Industry spans over many years. He--}}
{{--                                has served as Chief Executive Officer of several Print Publications.--}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div>
                            <img src="{{asset('template/images/abouts/about03.jpg')}}">
                            <h3>Hakeem Oyinloye</h3>
                            <h4>Head Finance</h4>
                            <p>
{{--                                An astute entrepreneur, a prolific business leader and visionary strategist with apt--}}
{{--                                experience in--}}
{{--                                product development and business expansion.--}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--        <section id="aboutbottom" class="pr-main">--}}
        {{--            <div class="container">--}}
        {{--                <h1>What others say about us</h1>--}}
        {{--                <span class="line"></span>--}}
        {{--                <div class="col-md-6 col-sm-6 col-xs-12 iteamleft top">--}}
        {{--                    <img src="{{asset('template/images/abouts/1.png')}}">--}}
        {{--                    <div class="data">--}}
        {{--                        <p>Content not available.</p>--}}
        {{--                        <p class="title">Martha M. Masters</p>--}}
        {{--                        <p class="end">Marketing -<span> WikiTravel</span></p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-6 col-sm-6 col-xs-12 iteamright top">--}}
        {{--                    <img src="{{asset('template/images/abouts/2.png')}}">--}}
        {{--                    <div class="data">--}}
        {{--                        <p>Content not available.</p>--}}
        {{--                        <p class="title">Anna Vandana</p>--}}
        {{--                        <p class="end">CEO -<span> images Wiki</span></p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-6 col-sm-6 col-xs-12 iteamleft">--}}
        {{--                    <img src="{{asset('template/images/abouts/3.png')}}">--}}
        {{--                    <div class="data">--}}
        {{--                        <p>Content not available.</p>--}}
        {{--                        <p class="title">Maxi Milli</p>--}}
        {{--                        <p class="end">Public Relations -<span> Max Mobilcom</span></p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-6 col-sm-6 col-xs-12 iteamright">--}}
        {{--                    <img src="{{asset('template/images/abouts/4.png')}}">--}}
        {{--                    <div class="data">--}}
        {{--                        <p>Content not available.</p>--}}
        {{--                        <p class="title">Dr. Dosist</p>--}}
        {{--                        <p class="end">Dean of Medicine - <span> Doom Inc</span></p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}
    </main>
    <!--Main index : End-->
@endsection
