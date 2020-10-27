@extends('layouts.template')
@section('main')
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Login</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <span>Login</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pr-main" id="pr-login">
            <div class="container">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <h1 class="ct-header">Login</h1>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Returning Customers</h4>
                        <p>If you have an account with us, please log in. </p>
                        <form id="login-form" class="form-validate form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf
                            <p>Email Address <span class="star">*</span></p>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <p>Password <span class="star">*</span></p>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <a href="{{url('password/reset')}}"><span class="re">Forgotten Password?</span></a>
                            | <a href="{{route('register')}}"><span class="create-account">Create Account</span></a>
                            <button type="submit" class="login">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <img src="{{asset('template/images/banner/login/banner-login.png')}}" />
                </div>

            </div>
        </section>
    </main><!--Main index : End-->
@endsection



