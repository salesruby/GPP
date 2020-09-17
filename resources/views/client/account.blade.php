@extends('layouts.template')
@section('main')
    <!--Main category : Begin-->
    <main id="main" class="account dashboard">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">My Account</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
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
                    <!--Account Sidebar: End-->
                    <!--Account main content : Begin -->
                    <section class="account-main col-md-9 col-sm-8 col-xs-12">
                        <h3 class="acc-title lg">Edit Account Information</h3>
                        <div class="form-edit-info">
                            <h4 class="acc-sub-title">Account Information</h4>
                            <form action={{route('client.account.update')}} method="POST" name="edit-acc-info">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Full Name<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address<span class="required">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" required value="{{$user->email}}">
                                </div>
                                <div class="account-bottom-action">
                                    <button type="submit" class="gbtn btn-edit-acc-info">Save</button>
                                </div>
                            </form>
                        </div>
                    </section>
                    <!-- Cart main content : End -->
                </div>
            </div>
        </section>
    </main><!-- Main Category: End -->
@endsection
