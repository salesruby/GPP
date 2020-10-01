<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Service;
use Hashids\Hashids;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private static $hashIds;

    public function __construct()
    {
        self::$hashIds = new Hashids('gpp', 10);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $services = Service::all();
        return view('services.index', compact('services'))
            ->with('i', (\request()->input('page', 1) -1)*10);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){
        $item = Service::findOrFail(self::$hashIds->decode($id)[0]);
        return view('shop.show', compact('item'));
    }

    /**
     * @param ServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceRequest $request){
        $input = $request->validated();
        $attachmentName = time() . '.' . $input['attachment']->extension();
        $input['attachment']->move(public_path('store'), $attachmentName);
        $input['attachment'] = $attachmentName;
        Service::create($input);
        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function update(Request $request, $id){
        $service = Service::findOrFail($id);
        $input = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string', 'min:1'],
            'attachment' => 'mimes:jpg,jpeg,png,svg,gif|max:96|dimensions:width=264,height=269'
        ]);
        if(isset($input['attachment'])){
            $attachmentName = time() . '.' . $input['attachment']->extension();
            $input['attachment']->move(public_path('store'), $attachmentName);
            $input['attachment'] = $attachmentName;
        }
        $service->update($input);
        return redirect()->route('services.index')->with('success', 'Update successfully');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request){
        $service = Service::findOrFail($request->id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function displayServices(){
        $services = Service::all();
        return view('shop.index', compact('services'));
    }

    public function payInfo($id){
        $item = Service::findOrFail(self::$hashIds->decode($id)[0]);
        return view('shop.pay', compact('item'));
    }
}
