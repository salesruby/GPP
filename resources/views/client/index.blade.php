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
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created On</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clients as $client)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$client['name']}}</td>
                                                <td>{{$client['email']}}</td>
                                                <td>{{\Carbon\Carbon::parse($client['created_at'])->format('M d Y H:i')}}</td>
                                                <td><a class="btn btn-primary view-contact-message"
                                                       href="{{route('clients.show',  $client['id'])}}">View Transactions</a></td>
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
                            @foreach( $clients as $client)
                                <div class="col-md-3 sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>{{$client['name']}}</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>{{$client['email']}}</strong>
                                                <span>{{\Carbon\Carbon::parse($client['created_at'])->addHour()->format('d M Y H:i')}}</span>
                                            </li>
                                            <li>
                                                <span><a class="btn btn-primary view-contact-message"
                                                             href="{{route('clients.show',  $client['id'])}}">View Transactions</a></span>
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

