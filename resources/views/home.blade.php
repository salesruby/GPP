@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Welcome back,</h2>
                            <p class="mb-md-0">GPP analytics dashboard.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">home</p>
                        </div>
                    </div>
                   @include('layouts.quick-links')
                </div>
            </div>
        </div>
        @include('layouts.statistics')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Recent Orders</p>
                        <p class="mb-4">List of all today's unprocessed orders</p>
                        <div>
                            @foreach( $newOrder as $order)
                                <div class="sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>{{$order->user->name}}</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong><a class="btn btn-primary view-order"
                                                           href="{{route('orders.show', $order->id)}}">View
                                                        Order</a></strong>
                                                <span>{{\Carbon\Carbon::parse($order->created_at)->addHour()->format('d M Y H:i')}}</span>
                                            </li>
                                            <li>
                                                <strong><a class="btn btn-link" href="/store/{{$order->attachment}}"
                                                           download>Download
                                                        File</a></strong>
                                                <span>{!!(!$order->status == 1)?"<span class='text-danger'>New</span>":"<span class='text-success'>Processed</span>"!!}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Today's Contacts</p>
                        <p class="mb-4">List of all today's contact</p>
                        <div>
                            @foreach( $newContact as $contact)
                                <div class="sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>{{$contact->name}}</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>{{$contact->email}}</strong>
                                                <span>{{\Carbon\Carbon::parse($contact->created_at)->addHour()->format('d M Y H:i')}}</span>
                                            </li>
                                            <li>
                                                <strong>{{$contact->subject}}</strong>
                                                <span><a class="btn btn-primary view-contact-message" href="#"
                                                         data-toggle="modal" data-target="#contact-modal"
                                                         data-id="{{$contact->id}}">View</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
