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
                    </div>
                </div><!--Account top banner : End-->
                <div class="row acc-dashboard">
                    <!--Account Sidebar: Begin -->
                @include('client.menu-layout')
                <!--Account Sidebar: End-->
                    <!--Account main content : Begin -->
                    <section class="account-main col-md-9 col-sm-8 col-xs-12">
                        <h3 class="acc-title lg">My Dashboard</h3>
                        <div class="row db-content">
                            <div class="db-hello col-xs-12">
                                <div class="pad-1015">
                                    <p class="hello-user">
                                        Hello, {{auth()->user()->name}}!
                                    </p>
                                    <p class="hello-par">
                                        From your My Account Dashboard you have the ability to view a snapshot of your
                                        recent account activity and update your account information. Select a link below
                                        to view or edit information.
                                    </p>
                                </div>
                            </div>
                            <div class="db-info col-xs-12">
                                @include('layouts.message')
                                <h3 class="acc-sub-tit-i">
                                    <i class="fa fa-user"></i>
                                    Account Information
                                </h3>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 db-contact">
                                        <h4 class="acc-title h-icon">
                                            Contact information
                                            <a href="{{route('client.account')}}" class="acc-edit"
                                               title="edit information">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                        </h4>
                                        <div class="acc-info-content pad-1015">
                                            <span class="name">{{auth()->user()->name}}</span>
                                            <span class="email">{{auth()->user()->email}}</span>
                                            <a href="{{url('/password/reset')}}" title="Change Password">Change
                                                Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="db-address col-xs-12">
                                <h4 class="acc-title">
                                    Contact Information
                                    <a href="{{route('client.address')}}" class="acc-edit" title="edit address">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </h4>
                                <div class="row">
                                    <div class="bs-address">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="acc-info-content belling-add pad-1015">
                                                <span class="title">Default Belling Address</span>
                                                <span
                                                    class="address"> Address - {{auth()->user()->address->address}}</span>
                                                <span
                                                    class="number-phone">Phone - {{auth()->user()->address->phone}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- Cart main content : End -->
                </div>

            </div>
        </section>
    </main>
    <!-- Main Category: End -->
@endsection
