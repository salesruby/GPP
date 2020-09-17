@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Users List,</h2>
                            <p class="mb-md-0">GPP users list</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">/ User</p>
                        </div>
                    </div>
                   @include('layouts.quick-links')
                </div>
            </div>
        </div>
        @include('layouts.statistics')
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs px-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="user-list-tab" data-toggle="tab" href="#user-list"
                                   role="tab" aria-controls="user-list" aria-selected="true">Users List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="create-user-tab" data-toggle="tab" href="#create-user"
                                   role="tab"
                                   aria-controls="create-user" aria-selected="false">Create User</a>
                            </li>
                        </ul>

                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-message" >{{$message}}</div>
                        @endif

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="user-list" role="tabpanel"
                                 aria-labelledby="user-list-tab">
                                <div class="table-responsive settings-form">
                                    <table id="user-table" class="table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created On</th>
                                            <th>Latest Update</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{\Carbon\Carbon::parse($user->created_at)->addHour()->format('M d Y H:i')}}</td>
                                                <td>{{\Carbon\Carbon::parse($user->updated_at)->addHour()->format('M d Y H:i')}}</td>
                                                <td>
                                                    @can('view-users')
                                                        <form id="delete-user-form"style="display: inline;" action="{{route('users.delete')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" value="{{$user->id}}" name="id">
                                                            <button type="button" id="delete-button" class="btn"><i class="mdi mdi-delete" style="color: #0e4cfd;"></i></button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>

                                </div>

                            </div>


                            <div class="tab-pane fade show" id="create-user" role="tabpanel"
                                 aria-labelledby="create-user-tab">
                                <form id="add-user-form" class="settings-form" method="POST" action="{{ route('users.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus
                                               placeholder="Name">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password"
                                               placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password_confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light reset">Cancel</button>
                                </form>
                            </div>

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
            $('#user-table').dataTable();
            $('#add-user-form').validate({
                rules:{
                    name:{
                        required: true,
                        minlength : 2
                    },
                    email:{
                        required: true,
                        email: true
                    },
                    password:{
                        required: true,
                        minlength: 8
                    },
                    password_confirmation:{
                        required: true,
                        equalTo: '#password'
                    }

                },
                messages:{
                    name: {
                        required: 'User name is required',
                        minlength: 'User name should be at least 2 characters long'
                    },
                    email:{
                        required: "User Email required",
                        email: "Email is invalid"
                    },
                    password:{
                        required: 'User password is required' ,
                        minlength: 'Password must be upto 8 character long'
                    },
                    password_confirmation:{
                        required: 'Confirm password',
                        equalTo: 'Password does not match'
                    }

                }
            })

            $('.settings-form #delete-button').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You to delete this user!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Deleted!',
                            'The user has been deleted.',
                            'success'
                        )
                            .then(() => {
                                $('#delete-user-form').submit();
                            })
                    }
                })
            })
        })
    </script>
@endsection


