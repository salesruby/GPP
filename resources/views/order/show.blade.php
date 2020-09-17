@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>{{$order->user->name}}'s order</h2>
                            <p class="mb-md-0">Order placed
                                on {{\Carbon\Carbon::parse($order->created_at)->addHour()->format('M d Y H:i')}}.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor crumbs">
                                <a href="{{route('home')}}">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                                <a href="{{route('orders.index')}}">&nbsp;Order List&nbsp;/&nbsp;</a>
                            </p>
                            <p class="text-primary mb-0 hover-cursor">{{$order->user->name}}'s order</p>
                        </div>
                    </div>
                    @include('layouts.quick-links')
                </div>
            </div>
        </div>
        @include('layouts.statistics')
        @include('layouts.message')
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-panel">
                            <div>
                                <div class="profile-panel-heading card-title" style="color:#ffffff;">Order</div>
                            </div>
                            <div class="profile-panel-body">
                                <p>{{$order->description}}</p>
                            </div>
                            <div class="profile-panel-footer">
                                @if($order->attachment !== null)
                                    <a href="/store/{{$order->attachment}}" download type="button"
                                       class="btn btn-secondary" data-dismiss="modal">Download File</a>
                                @endif
                                <button type="button" class="btn btn-primary reply-btn" data-dismiss="modal"
                                        data-id="{{$order->id}}">Reply
                                </button>
                            </div>
                        </div>
                        @foreach($order->response as $response)
                            <div class="profile-panel">
                                <div>
                                    <div class="profile-panel-heading card-title" style="color:#ffffff;">Response</div>
                                </div>
                                <div class="profile-panel-body">
                                    <p>{{$response->description}}</p>
                                </div>
                                @if($response->attachment !== null)
                                    <div class="profile-panel-footer">
                                        <a href="/store/{{$response->attachment}}" download type="button"
                                           class="btn btn-secondary">Download File</a>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('order.order-response')
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            function sweetAlert(response, redirectTo, failed) {
                console.log(response.error)
                if (response.success) {
                    Swal.fire(
                        'Successful!',
                        response.success,
                        'success'
                    ).then(function (result) {
                        if (result.value) {
                            redirectTo()
                        }
                    })
                } else {
                    Swal.fire(
                        'Failed!',
                        response.error,
                        // response.errors.join("<br />"),
                        'error'
                    ).then(function (result) {
                        if (result.value) {
                            failed()
                        }
                    })
                }
            }


            $('.reply-btn').on('click', function () {
                $('#order-response-modal').modal();
                var orderId = $(this).attr('data-id');
                $('#order-response-form').on('submit', function (event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/orders/respond',
                        data: new FormData(this),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            swal.showLoading();
                        },
                        success: function (response) {
                            var redirectTo = failed = function () {
                                $('#order-response-modal').modal('toggle');
                                window.location = '/admin/orders/' + orderId;
                            }

                            var failed = function () {
                                $('#order-response-modal').modal('toggle');
                                window.location = '/admin/orders/' + orderId;
                            }
                            sweetAlert(response, redirectTo, failed)
                        },
                        error: function (error) {
                            if (error.responseJSON.errors.hasOwnProperty('attachment')) {
                                $('#order-response-form span').addClass('error').text('File Size must not be more than 2Mb');
                            }
                        }
                    })
                })
            })

        })
    </script>
@endsection
