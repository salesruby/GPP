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
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs px-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="service-list-tab" data-toggle="tab"
                                   href="#service-list"
                                   role="tab" aria-controls="service-list" aria-selected="true">Services List</a>
                            </li>
                            @can('view-users')
                                <li class="nav-item">
                                    <a class="nav-link" id="create-service-tab" data-toggle="tab" href="#create-service"
                                       role="tab"
                                       aria-controls="create-service" aria-selected="false">Create Service</a>
                                </li>
                            @endcan
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="service-list" role="tabpanel"
                                 aria-labelledby="service-list-tab">
                                <div class="table-responsive settings-form">
                                    <table id="service-table" class="table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price per Unit</th>
                                            <th>Created On</th>
                                            <th>Updated On</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->description}}</td>
                                                <td>{{$service->price}}</td>
                                                <td>{{$service->created_at->format('Y-m-d')}}</td>
                                                <td>{{$service->updated_at->format('Y-m-d')}}</td>
                                                <td>
                                                    @can('view-users')
                                                        <a href="{{route('services.edit', $service->id)}}"
                                                           class="edit-service"><i
                                                                class="mdi mdi-pen"></i></a>
                                                        <form style="display: inline;" action="{{route('services.delete')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" value="{{$service->id}}" name="id">
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
                            <div class="tab-pane fade show" id="create-service" role="tabpanel"
                                 aria-labelledby="create-service-tab">
                                <form id="add-user-form" class="settings-form" method="POST"
                                      action="{{ route('services.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus
                                               placeholder="Service Name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="description" type="text"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="description"
                                               value="{{ old('description') }}" required autocomplete="description"
                                               placeholder="Service description">

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="price" type="number"
                                               class="form-control @error('price') is-invalid @enderror"
                                               name="price" required autocomplete="price"
                                               placeholder="Price per Unit">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
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
            $('#service-table').dataTable();
            $('#add-service-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    description: {
                        required: true,
                        minlength: 3
                    },
                    price: {
                        required: true,
                        minlength: 1
                    }

                },
                messages: {
                    name: {
                        required: 'Service name is required',
                        minlength: 'Service name should be at least 2 characters long'
                    },
                    description: {
                        required: "Service description is required",
                        minlength: "Service description should be at least 3 characters long"
                    },
                    price: {
                        required: 'Service price is required',
                        minlength: 'Price must be upto 1 character long'
                    }
                }
            })

            $('.settings-form #delete-button').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You to delete this service!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Deleted!',
                            'Your service has been deleted.',
                            'success'
                        )
                            .then(() => {
                                $('.settings-form form').submit();
                            })
                    }
                })
            })
        })
    </script>
@endsection


