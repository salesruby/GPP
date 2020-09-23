@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Shop</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Shop</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-shop">
            @include('layouts.message')
            <div class="container">
                @foreach($services as $item)
                    <div class="col-md-3 col-sm-6 col-xs-6 or-block">
                        <div class="or-image">
                            <a href="{{route('shop.show-item', $hashIds->encode($item->id))}}">
                                <img src="/new/gpp/public/store/{{$item->attachment}}" alt="service-04"/>
                            </a>
                        </div>
                        <div class="or-title">
                            <a href="{{route('shop.show-item', $hashIds->encode($item->id))}}">{{$item->name}}</a>
                        </div>
                        <div class="text">
                            <p>
                                {{$item->description}}
                            </p>
                        </div>
                        <a href="{{route('pay.info', $hashIds->encode($item->id))}}" class="btn-readmore order-now">Purchase</a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection


