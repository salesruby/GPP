<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $services = Service::all();
        return view('services.index', compact('services'))
            ->with('i', (\request()->input('page', 1) -1)*10);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        $input = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'min:1']
        ]);
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
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id){
        $service = Service::findOrFail($id);
        $input = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'min:1']
        ]);
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
}
