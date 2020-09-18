@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Edit Blog,</h2>
                            <p class="mb-md-0">Make Change on {{$blog->title}}.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">{{$blog->title}}</p>
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
                        <h4>Edit {{$blog->title}} Post</h4>
                        <div class="tab-content">
                            <div>
                                <form class="settings-form" enctype="multipart/form-data"
                                      action="{{ route('blogs.update', $hashIds->encode($blog->id))}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control" name="title"
                                               value="{{$blog->title}}" required autocomplete="title" autofocus
                                               placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control"
                                               name="summary"
                                               value="{{$blog->summary}}" required autocomplete="summary"
                                               placeholder="Post Summary">
                                    </div>

                                    <div class="form-group">
                                        <textarea aria-required="true" required class="form-control" rows="10"
                                                  cols="70%"
                                                  name="content" aria-invalid="true" placeholder="Enter Content*"
                                                  >{{$blog->content}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" class="form-control" name="attachment" value="{{$blog->attachment}}"> <br/>
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
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#blog-table').dataTable();
        })
    </script>
@endsection


