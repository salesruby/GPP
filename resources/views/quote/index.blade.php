@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Quote Request,</h2>
                            <p class="mb-md-0">Quote Request from site visitors.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Quote</p>
                        </div>
                    </div>
                    @include('layouts.quick-links')
                </div>
            </div>
        </div>
        @include('layouts.statistics')
        @include('layouts.message')
        <div class="row big-screen">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Quotes</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover quotes-table">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Client Name</th>
                                    <th>Quote</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Placement Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quotes as $quote)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$quote->name}}</td>
                                        <td><a class="btn btn-primary view-quote" style="padding: 10px;"
                                               href="{{route('quote.show', $quote->id)}}">View
                                                Quote</a></td>
                                        <td>{{$quote->email}}</td>
                                        <td>{{$quote->phone}}</td>
                                        <td>{{\Carbon\Carbon::parse($quote->created_at)->addHour()->format('M d Y H:i')}}</td>
                                        <td>
                                            {!!(!$quote->status == 1)?"<span class='text-danger'>New</span>":"<span class='text-success'>Processed</span>"!!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        SMALL SCREEN--}}

        <div class="row small-screen">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            @foreach( $quotes as $quote)
                                <div class="col-md-3 sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>{{$quote->name}}</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>{{$quote->email}}</strong>
                                                <span>{{$quote->phone}}</span>
                                            </li>
                                            <li>
                                                <span><a class="btn btn-primary view-quote" style="padding: 10px;"
                                                         href="{{route('quote.show', $quote->id)}}">View
                                                        Quote</a></span>
                                            </li>
                                            <li>
                                                <span>Created on {{\Carbon\Carbon::parse($quote->created_at)->addHour()->format('d M Y H:i')}}</span>
                                                <span>{!!(!$quote->status == 1)?"<span class='text-danger'>New</span>":"<span class='text-success'>Processed</span>"!!}</span>
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
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.quotes-table').dataTable();
        })
    </script>
@endsection
