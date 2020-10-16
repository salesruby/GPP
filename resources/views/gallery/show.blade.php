@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        @include('layouts.message')
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
                    <img src="{{asset('/gpp/public/store/'.$blog->attachment)}}">
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <div class="top"><h2><span>{{$blog->title}}</span></h2>
                        {!!$blog->content!!}
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
        <section class="blog-subscription pr-main">
            <div class="container">
                <div class="block-title-w">
                    <h2 class="block-title">Sign up for emails on new products and blog post</h2>
                </div>
                <div class="sub-title">Never miss an insight. We'll email you when new post is published</div>
                <form method="POST" action="{{route('blogs.subscribe')}}">
                    @csrf
                    <div>
                        <input class="form-control" name="email" placeholder="Email Address"/>
                        <button class="form-control" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
