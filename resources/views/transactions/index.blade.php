@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Client Orders,</h2>
                            <p class="mb-md-0">Orders from clients for service.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Orders</p>
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
                        <h4 class="card-title">Orders</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover orders-table">
                                <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Transaction ID</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->name}}</td>
                                        <td>{{$transaction->email}}</td>
                                        <td>{{$transaction->phone}}</td>
                                        <td>{{$transaction->transaction_id}}</td>
                                        <td>
                                                {{(isset($transaction->service->name))?$transaction->service->name:'Deleted'}}
                                        </td>
                                        <td>{{number_format($transaction->quantity)}}</td>
                                        <td>{{$transaction->amount}}</td>
                                        <td>{{\Carbon\Carbon::parse($transaction->created_at)->addHour()->format('M d Y H:i')}}</td>
                                        <td>@if($transaction->status == 1)
                                                <span class="badge badge-success">Delivered</span>
                                                @else
                                                <span class="badge badge-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td><button class="btn btn-primary transaction-btn" style="padding: 10px;"
                                                    data-id={{$transaction->id}}>Update</button></td>
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
                            @foreach($transactions as $transaction)
                                <div class="col-md-3 sale-box wow fadeInUp" data-wow-iteration="1">
                                    <div class="sale-box-inner">
                                        <div class="sale-box-head">
                                            <h4>{{$transaction->name}}</h4>
                                        </div>
                                        <ul class="sale-box-desc">
                                            <li>
                                                <strong>{{$transaction->email}}</strong>
                                                <span>Phone - {{$transaction->phone}}</span>
                                            </li>
                                            <li>
                                                <strong>{{(isset($transaction->service->name))?$transaction->service->name:'Deleted'}}</strong>
                                                <span>#{{number_format($transaction->amount)}} for {{$transaction->quantity}}</span>
                                            </li>
                                            <li>
                                                <strong>Trans-ID - {{$transaction->transaction_id}}</strong>
                                                <span>{{\Carbon\Carbon::parse($transaction->created_at)->addHour()->format('M d Y H:i')}}</span>
                                            </li>
                                            <li>
                                                <strong>@if($transaction->status == 1)
                                                            <span class="badge badge-success">Delivered</span>
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif</strong>
                                                <span>
                                                    <button class="btn btn-primary transaction-btn" style="padding: 10px;"
                                                       data-id={{$transaction->id}}>Update</button></span>
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
            $('.orders-table').dataTable();

            $('.transaction-btn').on('click', function () {
                var id = $(this).attr('data-id');
                // window.alert("hello")
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to confirm Delivery",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delivered!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: 'POST',
                            data: {
                                '_token' : '{{csrf_token()}}',
                                'id': id
                            },
                            url: "{{route('transactions.update')}}",
                            success: function (response) {
                                if (response.success) {
                                    Swal.fire(
                                        'Successful!',
                                        response.success,
                                        'success'
                                    ).then(function (result) {
                                        if (result.value) {
                                            location.reload()
                                        }
                                    })
                                } else {
                                    Swal.fire(
                                        'Failed!',
                                        response.error,
                                        'error'
                                    ).then(function (result) {
                                        if (result.value) {
                                            location.reload()
                                        }
                                    })
                                }
                            }
                        })
                    }
                })
            })
        })
    </script>
@endsection
