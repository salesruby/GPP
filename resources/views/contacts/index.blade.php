@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Contact List,</h2>
                            <p class="mb-md-0">GPP Contacts from website.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Contacts</p>
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
                                <div class="table-responsive settings-form">
                                    <table id="contacts-table" class="table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Created On</th>
                                            <th>Message</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->subject}}</td>
                                                <td>{{$contact->created_at->format('d M Y H:i')}}</td>
                                                {{--                                                <td><a class="btn btn-primary" href="{{route('contacts.show', $contact->id)}}">View</a></td>--}}
                                                <td><a class="btn btn-primary view-contact-message" href="#"
                                                       data-toggle="modal" data-target="#contact-modal"
                                                       data-id="{{$contact->id}}">View</a></td>
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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            @foreach( $contacts as $contact)
                                <div class="col-md-3 sale-box wow fadeInUp" data-wow-iteration="1">
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
@endsection
@include('contacts.message-modal')
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#contacts-table').dataTable();
            $('.view-contact-message').on('click', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'GET',
                    url: 'contacts/' + id,
                    success: function (response) {
                        $('.modal-title span').text(response.name)
                        $('.modal-body h5').text(response.subject)
                        $('.modal-body p').text(response.message)
                    }
                });
                $('#contact-modal').modal();
            })
        })
    </script>
@endsection
