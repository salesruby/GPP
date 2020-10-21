<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\PhotoCategory;
use Hashids\Hashids;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    private static $hashIds;

    public function __construct()
    {
        self::$hashIds = new Hashids('gpp', 10);
    }

    public function index()
    {
        $categories = PhotoCategory::all();
        return view('gallery.photos', compact('categories'));
    }

    public function photo($id){
        $photos = PhotoCategory::with('photo')->find(self::$hashIds->decode($id)[0]);
        return view('gallery.index', compact('photos'));
    }

    public function create(){
        $photos = Gallery::all();
        $categories = PhotoCategory::all();
        return view('gallery.create', compact('categories', 'photos'));
    }

    public function store(GalleryRequest $request)
    {
        $input = $request->validated();
        $message = ['success' => 'Photo created successfully'];
        $attachmentName = time() . '.' . $input['attachment']->extension();
        $input['attachment']->move(public_path('store'), $attachmentName);
        $input['attachment'] = $attachmentName;
        Gallery::create($input);
        return redirect()->route('photo.create')->with($message);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function edit($id)
//    {
//        $blog = Gallery::find(self::$hashIds->decode($id)[0]);
//        return view('blogs.edit', compact('blog'));
//    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
//    public function update(Request $request, $id)
//    {
//        $input = $request->validate([
//            'name' => 'required|string',
//            'photo_categories_id' => 'required',
//            'attachment' => 'mimes:jpg,jpeg,png,svg,gif|max:96|dimensions:width=264,height=269'
//        ]);
//        if(isset($input['attachment'])){
//            $attachmentName = time() . '.' . $input['attachment']->extension();
//            $input['attachment']->move(public_path('store'), $attachmentName);
//            $input['attachment'] = $attachmentName;
//        }
//        $blog = Gallery::find(self::$hashIds->decode($id)[0]);
//        $blog->update($input);
//        return redirect()->route('gallery.create')->with('success', 'Update successfully');
//    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $service = Gallery::find($request->id);
        $service->delete();
        return redirect()->route('photo.create')->with('success', 'Photo deleted successfully');
    }
}
