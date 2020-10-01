@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>{{$quote->name}}'s quote</h2>
                            <p class="mb-md-0">Quote sent
                                on {{\Carbon\Carbon::parse($quote->created_at)->addHour()->format('M d Y H:i')}}.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor crumbs">
                                <a href="{{route('home')}}">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                                <a href="{{route('quote.index')}}">&nbsp;Quote /&nbsp;</a>
                            </p>
                            <p class="text-primary mb-0 hover-cursor">{{$quote->name}}'s quote</p>
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
                                <div class="table-responsive">
                                    <table class="table-striped table-bordered" id="quote-table">
                                        <thead>
                                        <th>Field</th>
                                        <th>Request</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Number of Cover Page</td>
                                            <td>{{$quote->num_of_cover_page}} </td>
                                        </tr>
                                        <tr>
                                            <td>Number of Text Page</td>
                                            <td>{{$quote->num_of_text_page}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cover type</td>
                                            <td> {{$quote->cover_type}}</td>
                                        </tr>
                                        <tr>
                                            <td>Trim size</td>
                                            <td>{{$quote->trim_size}}</td>
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>{{$quote->qtty}}</td>
                                        </tr>
                                        <tr>
                                            <td>Colour option cover</td>
                                            <td>{{$quote->colour_option_cover}}</td>
                                        </tr>
                                        <tr>
                                            <td>Colour option inner</td>
                                            <td> {{$quote->colour_option_inner}}</td>
                                        </tr>
                                        <tr>
                                            <td>Colour option insert</td>
                                            <td> {{$quote->colour_option_insert}}</td>
                                        </tr>
                                        <tr>
                                            <td>Paper stock cover</td>
                                            <td> {{$quote->paper_stock_cover}}</td>
                                        </tr>
                                        <tr>
                                            <td>Paper stock inner</td>
                                            <td> {{$quote->paper_stock_inner}}</td>
                                        </tr>
                                        <tr>
                                            <td>Paper stock insert</td>
                                            <td>{{$quote->paper_stock_insert}}</td>
                                        </tr>
                                        <tr>
                                            <td>Paper stock text</td>
                                            <td> {{$quote->paper_stock_text}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cover finishing</td>
                                            <td> {{$quote->cover_finishing}}</td>
                                        </tr>
                                        <tr>
                                            <td>Complete job finishing</td>
                                            <td>{{$quote->complete_job_finishing}}</td>
                                        </tr>
                                        <tr>
                                            <td>Addition Instruction on finishing</td>
                                            <td>{{$quote->finishing_info_text}}</td>
                                        </tr>
                                        <tr>
                                            <td>packaging</td>
                                            <td>{{$quote->packaging}}</td>
                                        </tr>
                                        <tr>
                                            <td>Other packaging</td>
                                            <td>{{$quote->other_packaging}}</td>
                                        </tr>
                                        <tr>
                                            <td>Special instruction</td>
                                            <td> {{$quote->special_instruction}}</td>
                                        </tr>
                                        <tr>
                                            <td>Delivery instruction</td>
                                            <td>{{$quote->delivery_instruction}}</td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td> {{$quote->date}}</td>
                                        </tr>
                                        <tr>
                                            <td>Awareness</td>
                                            <td>{{$quote->awareness}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="profile-panel-footer">
                                @if($quote->attachment !== null)
                                    <a href="/gpp/public/store/{{$quote->attachment}}" download type="button"
                                       class="btn btn-secondary" data-dismiss="modal">Download File</a>
                                @endif
                                <button type="button" class="btn btn-primary reply-btn" data-dismiss="modal"
                                        data-id="{{$quote->id}}">Reply
                                </button>
                            </div>
                        </div>
                        @foreach($quote->response as $response)
                            <div class="profile-panel">
                                <div>
                                    <div class="profile-panel-heading card-title" style="color:#ffffff;">Response</div>
                                </div>
                                <div class="profile-panel-body">
                                    <p>{{$response->qtty}}</p>
                                </div>
                                @if($response->attachment !== null)
                                    <div class="profile-panel-footer">
                                        <a href="/gpp/public/store/{{$response->attachment}}" download type="button"
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
    @include('quote.response')
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
                $('#quote-response-modal').modal();
                var quoteId = $(this).attr('data-id');
                $('#quote-response-form').on('submit', function (event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: '/admin/quote/respond',
                        data: new FormData(this),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function () {
                            swal.showLoading();
                        },
                        success: function (response) {
                            var redirectTo = failed = function () {
                                $('#quote-response-modal').modal('toggle');
                                window.location = '/admin/quote/show/' + quoteId;
                            }

                            var failed = function () {
                                $('#quote-response-modal').modal('toggle');
                                window.location = '/admin/quote/show/' + quoteId;
                            }
                            sweetAlert(response, redirectTo, failed)
                        },
                        error: function (error) {
                            if (error.responseJSON.errors.hasOwnProperty('attachment')) {
                                $('#quote-response-form span').addClass('error').text('File Size must not be more than 2Mb');
                            }
                        }
                    })
                })
            })

        })
    </script>
@endsection
