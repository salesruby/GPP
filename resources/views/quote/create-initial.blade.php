@extends('layouts.template')
@section('main')
    <!--Main category : Begin-->
    <main id="main" class="account dashboard">
        <section class="header-page">
            @include('layouts.message')
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Welcome to GPP</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>Request for Quote</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="account-content parten-bg">
            <div class="container">
                <div class="row acc-dashboard wishlist-custom">
                    <section id="wishlist" class="account-main col-md-9 col-sm-9 col-xs-12 wishlist-custom"
                             style="padding: 0; margin:30px 0;">
                        <h3 class="acc-title lg">Request for Quote</h3>
                        <div class="row db-content">
                            <form id="place-order" action="{{route('quote.store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div style="display: flex; flex-flow: row wrap;">
                                    <div class="img"><img
                                            src="{{asset('template/images/img-wishlist.png')}}"/></div>
                                    <div class="data">
                                        <div style="display: flex; flex-flow: column wrap">
                                            <h4>Get Affordable Price For Quality Printing</h4>
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <textarea aria-invalid="true" name="description"
                                                      id="jform_contact_message"
                                                      cols="50" rows="3" class="required invalid" required="required" placeholder="Describe you quote"
                                                      aria-required="true"></textarea>
                                            <div class="info">
                                                    <input type="text" name="name" placeholder="Enter Name">
                                                    <input type="text" name="phone" placeholder="Enter Phone Number">
                                                    <input type="email" name="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                            <input type="file" name="attachment">
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
    <!-- Main Category: End -->
@endsection
