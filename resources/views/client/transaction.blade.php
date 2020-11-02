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
                                <span>My Order</span>
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
                <div class="row acc-order">
                    <!--Account Sidebar: Begin -->
                @include('client.menu-layout')
                <!--Account Sidebar: End-->
                    <!--Account main content : Begin -->
                    <section class="account-main col-md-9 col-sm-8 col-xs-12">
                        <h3 class="acc-title lg">My Orders</h3>
                        <div class="form-edit-info">
                            <table class="data-table" id="my-orders-table">
                                <tr class="">
                                    <th>Order #</th>
                                    <th class="th_hidden"><span class="nobr">Order Title</span></th>
                                    <th>Order Status</th>
                                    <th class="th_hidden"><span class="nobr">Date</span></th>
                                    <th>Download Invoice</th>
                                </tr>
                                @foreach($orders as $order)
                                    <tr class="">
                                        <td>{{++$i}}</td>
                                        <td class="th_hidden">Global Plus</td>
                                        <td>
                                            @if($order->status)
                                                <span class="badge badge-success"
                                                      style="background: green;">Processed</span>
                                            @else
                                                <span class="badge badge-warning"
                                                      style="background: goldenrod;">Pending</span>
                                            @endif
                                        </td>
                                        <td><span
                                                class="nobr">{{\Carbon\Carbon::parse($order->created_at)->addHour()->format('M d Y H:i')}}</span>
                                        </td>
                                        <td class="th_hidden a-center last">
                                            @if($order->status)
                                                <span class="nobr">
                                                    @foreach($order->response as $response)
                                                        <a href="{{url('gpp/public/store/'.$response->attachment)}}" rel="noreferrer noopener" target="_blank">Invoice No.{{$response->id}}</a>
                                                    @endforeach
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </section>
                    <!-- Cart main content : End -->

                    <section class="account-main col-md-9 col-sm-8 col-xs-12">
                        <h3 class="acc-title lg">My Shop Transactions</h3>
                        <div class="form-edit-info">
                            <table class="data-table" id="my-shop-table">
                                <tr class="">
                                    <th class="th_hidden"><span class="nobr">Transaction Id</span></th>
                                    <th>Item</th>
                                    <th class="th_hidden"><span class="nobr">Date</span></th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>

                                @foreach($shoppedItems as $item)
                                    <tr class="">
                                        <td class="th_hidden"><span class="nobr">{{$item->transaction_id}}</span></td>
                                        <td>{{$item->name}}</td>
                                        <td class="th_hidden"><span class="nobr">{{\Carbon\Carbon::parse($item->created_at)->addHour()->format('M d Y H:i')}}</span>
                                        </td>
                                        <td>#{{number_format($item->amount)}} for {{$item->quantity}} </td>
                                        <td>
                                            @if($item->status)
                                                <span class="badge badge-success"
                                                      style="background: green;">Processed</span>
                                            @else
                                                <span class="badge badge-warning"
                                                      style="background: goldenrod;">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </section><!-- Cart main content : End -->
                </div>

            </div>
        </section>
    </main>
    <!-- Main Category: End -->
@endsection
