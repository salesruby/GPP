<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Job;



class JobController extends Controller
{
    private static $hashIds;

    public function __construct()
    {
        self::$hashIds = new Hashids('gpp', 10);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * @param JobRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(JobRequest $request)
    {
        $message = ['success' => 'Job created successfully'];
        Job::create($request->all());
        return redirect()->route('jobs.index')->with($message);
    }

    public function show($id)
    {
        $job = Job::find(self::$hashIds->decode($id)[0]);
        return view('jobs.show', compact('job'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $job = Job::find(self::$hashIds->decode($id)[0]);
        return view('jobs.edit', compact('job'));
    }

    /**
     * @param JobRequest $request
     * @param $id
     * @return $this
     */
    public function update(JobRequest $request, $id)
    {
        $job = Job::find(self::$hashIds->decode($id)[0]);
        $job->update($request->all());
        return redirect()->route('jobs.index')->with('success', 'Update successfully');
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function destroy(Request $request)
    {
        $service = Job::find($request->id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Job deleted successfully');
    }

}
