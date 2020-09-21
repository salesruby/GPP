@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Create Blog,</h2>
                            <p class="mb-md-0">Put out interesting content for client consumption.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Create Blog</p>
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
                        <div>
                            <form id="add-user-form" class="settings-form" method="POST" enctype="multipart/form-data"
                                  action="{{ route('blogs.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control" name="title"
                                           value="{{ old('title') }}" required autocomplete="title" autofocus
                                           placeholder="Title">
                                    <p class="text-muted">*Note: Title should not be more than 23 Characters</p>
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                           class="form-control"
                                           name="summary"
                                           value="{{ old('summary') }}" required autocomplete="summary"
                                           placeholder="Post Summary">
                                    <p class="text-muted">*Note: Summary should not be more than 105 Characters</p>
                                </div>

                                <div class="form-group">
                                        <textarea aria-required="true" required class="form-control" id="summernote" rows="10"
                                                  cols="70%"
                                                  name="content" aria-invalid="true" placeholder="Enter Content*"
                                                  value="{{old('content')}}"></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="file" class="form-control" name="attachment"> <br/>
                                    <p class="text-danger">*Note: Image should not be more than 96Kb, and its dimension 263 * 252</p>
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
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#summernote').summernote();
        })
    </script>
@endsection
