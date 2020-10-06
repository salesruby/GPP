<?php

namespace App\Http\Controllers\Admin;

use App\Help;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Mail\ResponseMail;
use App\Response;
use Hashids\Hashids;
use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Mail;


class BlogController extends Controller
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
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'))
            ->with('i', (\request()->input('page', 1) - 1) * 10);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * @param BlogRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BlogRequest $request)
    {
        $input = $request->validated();
        $message = ['success' => 'Blog created successfully'];
        $attachmentName = time() . '.' . $input['attachment']->extension();
        $input['attachment']->move(public_path('store'), $attachmentName);
        $input['attachment'] = $attachmentName;
        Blog::create($input);
        return redirect()->route('blogs.index')->with($message);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail(self::$hashIds->decode($id)[0]);
        return view('blogs.show', compact('blog'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail(self::$hashIds->decode($id)[0]);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'title' => 'required|max:23',
            'summary' => 'required|max:105',
            'content' => 'required',
            'attachment' => 'mimes:jpg,jpeg,png,svg,gif|max:96|dimensions:width=264,height=269'
        ]);
        if(isset($input['attachment'])){
            $attachmentName = time() . '.' . $input['attachment']->extension();
            $input['attachment']->move(public_path('store'), $attachmentName);
            $input['attachment'] = $attachmentName;
        }
        $blog = Blog::findOrFail(self::$hashIds->decode($id)[0]);
        $blog->update($input);
        return redirect()->route('blogs.index')->with('success', 'Update successfully');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $service = Blog::findOrFail($request->id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Blog deleted successfully');
    }

}
