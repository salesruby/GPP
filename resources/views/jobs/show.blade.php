@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        @include('layouts.message')
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">{{$job->title}}</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Job</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="pr-main">
            <div class="container">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="{{asset('template/images/career/1.png')}}" alt="Career Image"/>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>{{$job->title}}</span></h2>
                        {!!$job->description!!}
                    </div>
                    <div class="top">
                        <h2>
                            <span>Role Summary</span>
                        </h2>
                        <div style="line-height: 2em;">
                            {{$job->role}}
                        </div>
                    </div>

                    <div class="quote-section">
                        <form method="POST" action="{{route('jobs.apply')}}" enctype="multipart/form-data">
                            @csrf
                            <h5>Apply for this position</h5>
                            <div class="other-information-sub">
                                <label for="cv">Upload your CV *</label>
                                <input type="file" id="cv" name="cv" required>
                                <input type="hidden" name="subject" value="{{$job->title}}">
                            </div>
                            <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                <div style="flex-grow: 1;"></div>
                                <button type="submit" class="addcart">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
