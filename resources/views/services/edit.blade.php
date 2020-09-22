@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Edit Service,</h2>
                            <p class="mb-md-0">Make change on {{$service->name}} .</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">{{$service->name}}</p>
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
                        <h4>Edit Service</h4>
                        <div class="tab-content">
                            <div>
                                <form id="add-user-form" class="settings-form" method="POST" enctype="multipart/form-data"
                                      action="{{ route('services.update', $service->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{$service->name}}" required autocomplete="name" autofocus
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
                                               value="{{$service->description}}" required autocomplete="description"
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
                                               name="price" required autocomplete="price" value="{{$service->price}}"
                                               placeholder="Price per Unit">

                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="attachment" value="{{$service->attachment}}"> <br/>
                                        <p class="text-danger">*Note: Image should not be more than 96Kb, and its dimension 264 * 269</p>
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
        })
    </script>
@endsection


