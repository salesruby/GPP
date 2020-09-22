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
                        <h3 class="acc-title lg">Your paying for {{$item->name}}</h3>
                        <div class="row db-content">
                            <form id="payment" action="{{route('pay')}}" method="POST">
                                @csrf
{{--                                <input type="hidden" name="email" value="otemuyiwa@gmail.com"> --}}{{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="{{$item->price}}00"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                {{--                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > --}}{{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
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
                                                    <input type="text" id="name" name="metadata[]" placeholder="Enter Name" required>
                                                </div>
                                                <div>
                                                    <input type="text" id="phone" name="metadata[]"  placeholder="Enter Phone Number"
                                                           required>
                                                </div>
                                                <div>
                                                    <input type="email" name="email"  placeholder="Enter Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="display: flex; flex-flow:row wrap;" class="total submit-quote">
                                            <div style="flex-grow: 1;"></div>
                                            <button type="submit" class="addcart">Pay Now</button>
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#payment').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    phone: {
                        required: true,
                    },
                    email: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: 'Name is required',
                        minlength: 'Name should be at least 2 characters long'
                    },
                    phone: {
                        required: "Phone number is required"
                    },
                    email: {
                        required: 'Email is required',
                    }
                }
            })

        });

    </script>
@endsection
