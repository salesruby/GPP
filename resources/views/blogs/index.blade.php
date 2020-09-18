@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Blog Post</h2>
                            <p class="mb-md-0">View all blog post.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Blog Post</p>
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
                        <div class="table-responsive settings-form">
                            <table id="blog-table" class="table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Summary</th>
                                    <th>Content</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{substr($blog->summary, 0, 35)}}...</td>
                                        <td><a class="btn btn-primary" style="padding: 10px;"
                                               href="{{route('blogs.show', $hashIds->encode($blog->id))}}">View</a></td>
                                        <td>{{\Carbon\Carbon::parse($blog->created_at)->addHour()->format('M d Y H:i')}}</td>
                                        <td>
                                            @can('view-users')
                                                <a href="{{route('blogs.edit', $hashIds->encode($blog->id))}}"
                                                   class="edit-blog"><i
                                                        class="mdi mdi-pen"></i></a>
                                                <form style="display: inline;"
                                                      action="{{route('blogs.destroy', $blog->id )}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" value="{{$blog->id}}" name="id">
                                                    <button type="button" id="delete-button" class="btn"><i
                                                            class="mdi mdi-delete" style="color: #0e4cfd;"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </td>
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
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#blog-table').dataTable();
        })
    </script>
@endsection


