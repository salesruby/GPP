@extends('layouts.template')
@section('main')
    <!--Main category : Begin-->
    <main id="main" class="account dashboard">
        <section class="header-page">
            <div class="container">
                <div>@include('layouts.message')</div>
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">My Account</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <span>My Account</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="account-content parten-bg">
            <div class="container">
                <!--Account top banner -->
                <div class="row">
                    <div class="col-md-12 cart-banner-top hidden-xs">
{{--                        <a href="#" title="cart top banner">--}}
{{--                            <img src="{{asset('template/images/banner/cart/top-banner.png')}}" alt="Cart top banner"/>--}}
{{--                        </a>--}}
                    </div>
                </div><!--Account top banner : End-->
                <div class="row acc-dashboard">
                    <!--Account Sidebar: Begin -->
                    @include('client.menu-layout')
                    <section id="wishlist" class="account-main col-md-9 col-sm-8 col-xs-12" style="padding: 0px;">
                        <h3 class="acc-title lg">Place Your order</h3>
                        <div class="row db-content">
                            <form id="place-order" action="{{route('store.order')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <table>
                                    <tr>
                                        <td class="img"><img src="{{asset('template/images/img-wishlist.png')}}"/></td>
                                        <td class="data">
                                            <h4>Get Affordable Price For Quality Printing</h4>
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <textarea aria-invalid="true" name="description"
                                                      id="jform_contact_message"
                                                      cols="50" rows="3" class="required invalid" required="required"
                                                      aria-required="true"></textarea>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td colspan="3">
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                            <button type="submit" class="addcart">Submit Order</button>
                                            <input type="file" name="attachment" style="padding-left: 15px;">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </section>
                </div>

            </div>
        </section>
    </main>
    <!-- Main Category: End -->
@endsection
