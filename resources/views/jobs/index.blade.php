@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Job Post</h2>
                            <p class="mb-md-0">View all job post.</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <a href="{{route('home')}}" class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</a>
                            <p class="text-primary mb-0 hover-cursor">Job Post</p>
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
                            <table id="job-table" class="table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Role</th>
                                    <th>Description</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->title}}</td>
                                        <td>{{substr($job->role, 0, 35)}}...</td>
                                        <td><a class="btn btn-primary" style="padding: 10px;"
                                               href="{{route('jobs.show', $hashIds->encode($job->id))}}">View</a></td>
                                        <td>{{\Carbon\Carbon::parse($job->created_at)->addHour()->format('M d Y H:i')}}</td>
                                        <td>
                                            @can('view-users')
                                                <a href="{{route('jobs.edit', $hashIds->encode($job->id))}}"
                                                   class="edit-job"><i
                                                        class="mdi mdi-pen"></i></a>
                                                    <form style="display: inline;"
                                                          action="{{route('jobs.destroy')}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" value="{{$job->id}}" name="id">
                                                    <button type="button" class="delete-button btn"><i
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
            $('#job-table').dataTable();

            $('.delete-button').on('click', function () {
                // window.alert("hello")
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to delete this job?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete!'
                }).then((result) => {
                    if (result.value) {
                        var form = $(this).parents('form:first');
                        form.submit();
                    }
                })
            })
        })
    </script>
@endsection


