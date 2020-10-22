@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        @include('layouts.message')
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Gallery</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Gallery</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutus" class="pr-main gallery">
            <div class="container">
                @foreach($photos->photo as $photo)
                    <div class="gallery-category-pix">
                        <img src="{{asset('gpp/public/store/'.$photo->attachment)}}" alt="Career Image"/>
                        <div>{{ucfirst($photo->name)}}</div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
