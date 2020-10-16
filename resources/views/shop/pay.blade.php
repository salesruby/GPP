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
                        <h3 class="acc-title lg">You are paying for {{$item->name}}</h3>
                        <div class="row db-content">
                            <form id="payment" action="{{route('pay')}}" method="POST">
                                @csrf
                                <input type="hidden" name="email" value="{{auth()->user()->email}}"> {{-- required --}}
                                {{--<input type="hidden" name="orderID" value="345">--}}
                                <input type="hidden" name="amount"
                                       value="{{$item->price}}00"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="{{$quantity}}">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata"
                                       value="{{ json_encode($array = ['name' => auth()->user()->name,
                                       'phone'=> auth()->user()->address->phone, 'item_id'=> $item->id, 'user_id'=>auth()->user()->id]) }}"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference"
                                       value="{{ Paystack::genTranxRef() }}"> {{-- required --}}

                                <div style="display: flex; flex-flow: row wrap;">
                                    <div class="img"><img
                                                src="{{asset('template/images/img-wishlist.png')}}"/></div>
                                    <div class="data">
                                        <div style="display: flex; flex-flow: column wrap">
                                            <h4>Amount ₦{{number_format($item->price*$quantity, 2)}} </h4>
                                            <p>We provide high quality business cards, postcards, flyers, brochures,
                                                stationery and other premium online print products...</p>
                                            <div class="info">
                                                <table>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>price/unit</th>
                                                        <th>Qtty</th>
                                                        <th>Total Price
                                                            <small>(price per unit * Qtty)</small>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>₦{{number_format($item->price)}}</td>
                                                        <td>{{$quantity}}</td>
                                                        <td>₦{{number_format($totalPrice)}}</td>
                                                    </tr>
                                                </table>
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
