@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Register</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <span>Register</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pr-main" id="pr-register">
            <div class="container">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="col-md-6 col-sm-6 col-xs-12 left">
                        <h1>Create an Account</h1>
                        {{--<h4>Personal Information</h4>--}}
                        <form id="register-form" class="form-validate form-horizontal" method="POST" action="{{ route('register') }}">
                            @csrf
                            <p>Full Name <span class="star">*</span></p>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Email Address <span class="star">*</span></p>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Phone Number <span class="star">*</span></p>
                            <input id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Create a password  <span class="star">*</span></p>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Confirm your password  <span class="star">*</span></p>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <div>
                                <input type="checkbox" value="yes" class="inputbox" name="remember" id="remember"><span class="re">Agree to Conditions</span>
                                <br/>
                                Already have an account? <a href="{{route('login')}}"><span class="login">Login</span></a>
                                <button type="submit" class="register">Register</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <img src="{{asset('template/images/banner-wishlist.png')}}" />
                </div>

            </div>
        </section>
    </main><!--Main index : End-->
@endsection
