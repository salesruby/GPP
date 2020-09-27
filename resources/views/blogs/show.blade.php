@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">{{$blog->title}}</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Blog</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="pr-main">
            <div class="container">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <img src="/gpp/public/store/{{$blog->attachment}}">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="top"><h2><span>{{$blog->title}}</span></h2>
                        <p>
                            {{$blog->content}}
                        </p>
                    </div>
                    <div class="top">
                        <h2>
                            <span>Summary</span>
                        </h2>
                        <div style="line-height: 2em;">
                            {{$blog->summary}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
