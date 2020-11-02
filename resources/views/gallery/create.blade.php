@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Photos List,</h2>
                            <p class="mb-md-0">GPP photos list</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">/ Photo</p>
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
                                <a class="nav-link active" id="photo-list-tab" data-toggle="tab" href="#photo-list"
                                   role="tab" aria-controls="photo-list" aria-selected="true">Photos List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="create-photo-tab" data-toggle="tab" href="#create-photo"
                                   role="tab"
                                   aria-controls="create-photo" aria-selected="false">Create Photo</a>
                            </li>
                        </ul>

                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-message" >{{$message}}</div>
                        @endif

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="photo-list" role="tabpanel"
                                 aria-labelledby="photo-list-tab">
                                <div class="table-responsive settings-form">
                                    <table id="photo-table" class="table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Created On</th>
                                            <th>Latest Update</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($photos as $photo)
                                            <tr>
                                                <td>{{$photo->name}}</td>
                                                <td>{{$photo->category->name}}</td>
                                                <td>{{\Carbon\Carbon::parse($photo->created_at)->addHour()->format('M d Y H:i')}}</td>
                                                <td>{{\Carbon\Carbon::parse($photo->updated_at)->addHour()->format('M d Y H:i')}}</td>
                                                <td>
                                                    @can('view-users')
                                                        <form id="delete-photo-form"style="display: inline;" action="{{route('photo.destroy')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" value="{{$photo->id}}" name="id">
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
                            <div class="tab-pane fade show" id="create-photo" role="tabpanel"
                                 aria-labelledby="create-photo-tab">
                                <form id="add-photo-form" class="settings-form" method="POST" enctype="multipart/form-data"
                                      action="{{ route('photo.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="name"
                                               value="{{ old('name') }}" required autocomplete="title" autofocus
                                               placeholder="Name">
                                        <p class="text-muted">*Note: Title should not be more than 23 Characters</p>
                                    </div>
                                    <div class="form-group">
                                        <select name="photo_categories_id" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-muted">*Note: Please select photo category</p>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="attachment"> <br/>
                                        <p class="text-danger">*Note: Image should not be more than 96Kb, and its dimension
                                            299 * 299</p>
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
            $('#photo-table').dataTable();

            $('.settings-form #delete-button').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You to delete this photo!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Deleted!',
                            'The photo has been deleted.',
                            'success'
                        )
                            .then(() => {
                                $('#delete-photo-form').submit();
                            })
                    }
                })
            })
        })
    </script>
@endsection



