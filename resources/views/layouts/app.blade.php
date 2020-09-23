<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RocketPay') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="{{asset('dashboard/vendors/summernote/summernote.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-4.4.1-dist/css/bootstrap.min.css')}}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/custom.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{url('/')}}"><img
                        src="{{asset('dashboard/images/logo.png')}}"
                        alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('/')}}">GP</a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-4 w-100">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    <div class="input-group">
                        <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search now" aria-label="search"
                               aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <span id="initials-small">
                            @php
                                foreach (explode(' ', auth()->user()->name) as $name){
                                    echo strtoupper(substr($name, 0, 1));
                                }
                            @endphp
                        </span>
                        <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="mdi mdi-settings text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-primary"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="user-initials">
                <a href="{{route('home')}}"><span id="initials">
                    @php
                        foreach (explode(' ', auth()->user()->name) as $name){
                            echo strtoupper(substr($name, 0, 1));
                        }
                    @endphp</span></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts.index')}}">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Contacts</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('services.index')}}">
                        <i class="mdi mdi-toolbox menu-icon"></i>
                        <span class="menu-title">Services</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">
                        <i class="mdi mdi-account-circle menu-icon"></i>
                        <span class="menu-title">Clients</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('transactions.index')}}">
                        <i class="mdi mdi-transit-connection menu-icon"></i>
                        <span class="menu-title">Transactions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('quote.index')}}">
                        <i class="mdi mdi-cart-arrow-right menu-icon"></i>
                        <span class="menu-title">Quotes Request</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('orders.index')}}">
                        <i class="mdi mdi-cart menu-icon"></i>
                        <span class="menu-title">Orders</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.index')}}">
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                        <span class="menu-title">Users</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('blogs.index')}}">
                        <i class="mdi mdi-blogger menu-icon"></i>
                        <span class="menu-title">Blog Post</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
        <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{\Carbon\Carbon::now()->year}} <a
                            href="https://www.rocketpay.cc/" target="_blank">Global Plus Publishing</a>. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('dashboard/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('dashboard/vendors/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('dashboard/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('dashboard/js/template.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('dashboard/js/dashboard.js')}}"></script>
<script src="{{asset('dashboard/js/jquery.validator.js')}}"></script>
{{--<script src="{{asset('dashboard/js/data-table.js')}}"></script>--}}
{{--<script src="{{asset('dashboard/js/jquery.dataTables.js')}}"></script>--}}
<script src="{{asset('dashboard/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('dashboard/js/sweetalert2.min.js')}}"></script>
<script src="{{asset('bootstrap-4.4.1-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/vendors/summernote/summernote.min.js')}}"></script>
<!-- GetButton.io widget -->
<!-- End custom js for this page-->
@yield('script')


<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+2348126604977", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

</body>
</html>
