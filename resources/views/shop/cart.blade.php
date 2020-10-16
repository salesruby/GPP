@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Payment for {{$item->name}}</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Payment</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pr-main">
            <div class="container">
                <div class="row acc-dashboard wishlist-custom">
                    <section id="wishlist" class="account-main col-md-9 col-sm-9 col-xs-12 wishlist-custom"
                             style="padding: 0; margin:30px 0;">
                        <h3 class="acc-title lg">Place an order for {{$item->name}}</h3>
                        <div class="row db-content">
                            <form action="{{route('shop.pay', $hashIds->encode($item->id))}}" method="POST">
                                @csrf
                                <div style="display: flex; flex-flow: row wrap;">
                                    <div class="img"><img
                                                src="{{asset('template/images/img-wishlist.png')}}"/></div>
                                    <div class="data">
                                        <div style="display: flex; flex-flow: column wrap">
                                            <h4>Amount ₦{{number_format($item->price, 2)}} </h4>
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <div class="info">
                                                <div>
                                                    <input type="number" name="quantity"  placeholder="Enter Quantity" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                            <div style="flex-grow: 1;"></div>
                                            <button type="submit" class="addcart">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <!--Main index : End-->
@endsection
