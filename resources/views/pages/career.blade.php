@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Career</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Career</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="pr-main">
            <div class="container">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="{{asset('template/images/career/1.png')}}" alt="Career Image"/>
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

                </div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>Traditional Benefits</h1>
                    <p>Our passion level goes beyond printing, we treat employees with utmost care.</p>
                    <p>Listed below are the benefits of working with us, they might not be exciting, but they make a big
                        difference. </p>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="benefits">
                            <div class="benefits-title">Subsidized lunch</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/briefcase.png')}}" alt="icon">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="benefits">
                            <div class="benefits-title">Health insurance</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/heart.png')}}" alt="icon"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="benefits">
                            <div class="benefits-title">MacBook</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/laptop.png')}}" alt="icon">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="benefits">
                            <div class="benefits-title">Flexible working</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/clock.png')}}" alt="icon"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="benefits">
                            <div class="benefits-title">Employee Assistance</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/help.png')}}" alt="icon"></div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                        <div class="benefits">
                            <div class="benefits-title">Gym membership</div>
                            <div class="spacer"></div>
                            <div class="icon"><img src="{{asset('template/images/career/barbell.png')}}" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--Jobs--}}

        <section class="pr-main job-section">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 job-section-content">
                    <h1>Job Openings</h1>
                    <p>We’re passionate about print, but what does that mean for you? It’s a promise that you’ll always
                        receive </p>
                    <p>print created on a press that sits at the very forefront of printing technology.</p>
                    @if(!$jobs->isEmpty())
                        @foreach($jobs as $job)
                            <div class="col-xs-12 job">
                                <div>
                                    <h2>{{$job->title}}</h2>
                                    <div class="spacer"></div>
                                    <h2 class="status">Open</h2>
                                </div>
                                <div class="job-details">
                                    {{$job->role}}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
