@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Client List,</h2>
                            <p class="mb-md-0">List of all registered customer.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor">Clients</p>
                        </div>
                    </div>
                    @include('layouts.quick-links')
                </div>
            </div>
        </div>
        @include('layouts.statistics')
        @include('layouts.message')
        <div class="row big-screen">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div id="service-list" aria-labelledby="service-list-tab">
                                <div class="table-responsive">
                                    <table id="clients-table" class="table-striped table-hover">
                                        <thead>
                                        <tr class="">
                                            <th>Order #</th>
                                            <th>Order Title</th>
                                            <th>Order Status</th>
                                            <th>Date</th>
                                            <th>Download Invoice</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($client->order as $order)
                                            <tr class="">
                                                <td>{{++$i}}</td>
                                                <td>Global Plus</td>
                                                <td>
                                                    @if($order->status)
                                                        <span class="badge badge-success"
                                                              style="background: green;">Processed</span>
                                                    @else
                                                        <span class="badge badge-warning"
                                                              style="background: goldenrod;">Pending</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span>{{\Carbon\Carbon::parse($order->created_at)->addHour()->format('M d Y H:i')}}</span>
                                                </td>
                                                <td>
                                                    @if($order->status)
                                                        <span>
                                                            @foreach($order->response as $response)
                                                                <a href="/gpp/public/store/{{$response->attachment}}"
                                                                   rel="noreferrer noopener"
                                                                   target="_blank">Invoice No.{{$response->id}}</a>
                                                            @endforeach
                                                        </span>
                                                    @else
                                                        <span>Invoice not generated</span>
                                                    @endif
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
            </div>
        </div>


        {{--        SMALL SCREEN--}}


        <div class="row small-screen">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            @foreach( $client->order as $client)
                                <div class="col-md-3 sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>Global Plus</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>
                                                    @if($order->status)
                                                        <span class="badge badge-success"
                                                              style="background: green;">Processed</span>
                                                    @else
                                                        <span class="badge badge-warning"
                                                              style="background: goldenrod;">Pending</span>
                                                    @endif
                                                </strong>
                                                <span>{{\Carbon\Carbon::parse($order->created_at)->addHour()->format('M d Y H:i')}}</span>
                                            </li>
                                            <li>
                                                @if($order->status)
                                                    <span>
                                                    @foreach($order->response as $response)
                                                            <a href="/gpp/public/store/{{$response->attachment}}"
                                                               rel="noreferrer noopener"
                                                               target="_blank">Invoice No.{{$response->id}}</a>
                                                        @endforeach
                                                    </span>
                                                @else
                                                    <span>Invoice not generated</span>
                                                @endif
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
            $('#clients-table').dataTable();
        })
    </script>
@endsection

