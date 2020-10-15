@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Edit Job,</h2>
                            <p class="mb-md-0">Make Change on {{$job->title}}.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">{{$job->title}}</p>
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
                        <h4>Edit {{$job->title}} Post</h4>
                        <div class="tab-content">
                            <div>
                                <form class="settings-form" enctype="multipart/form-data"
                                      action="{{ route('jobs.update', $hashIds->encode($job->id))}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="title"
                                               value="{{$job->title}}" required autocomplete="title" autofocus
                                               placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control"
                                               name="role"
                                               value="{{$job->role}}" required autocomplete="role"
                                               placeholder="Job Role">
                                    </div>

                                    <div class="form-group">
                                        <textarea aria-required="true" id="summernote" required class="form-control"
                                                  rows="10"
                                                  cols="70%"
                                                  name="description" aria-invalid="true" placeholder="Enter Description*"
                                        >{{$job->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="status" required>
                                            <option value="0" @php echo($job->status == 0)?'selected':'';@endphp>Open</option>
                                            <option value="1" @php echo($job->status == 1)?'selected':'';@endphp>Closed</option>
                                        </select>
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
            $('#job-table').dataTable();
        });
        new FroalaEditor('textarea#summernote')
    </script>
@endsection


