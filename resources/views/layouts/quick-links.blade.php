<div class="d-flex justify-content-between align-items-end flex-wrap">
{{--    <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">--}}
{{--        <i class="mdi mdi-download text-muted"></i>--}}
{{--    </button>--}}
{{--    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">--}}
{{--        <i class="mdi mdi-clock-outline text-muted"></i>--}}
{{--    </button>--}}
    <a href="{{route('blogs.create')}}" title="Create a Blog Post">
        <button type="button" class="btn btn-light bg-white  mt-2 mt-xl-0" style="margin-right: 5px;">
{{--            <i class="mdi mdi-plus text-muted"></i>--}}
            Create Post
        </button>
    </a>

    <a href="{{route('jobs.create')}}" title="Post a Job">
        <button type="button" class="btn btn-light bg-white  mt-2 mt-xl-0" style="margin-right: 5px;">
            Create Job
        </button>
    </a>
</div>
