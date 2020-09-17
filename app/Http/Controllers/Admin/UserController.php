<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index(){
        $users = User::where('id', '!=', auth()->user()->id)->latest()->get();
        return  view('admin.user', compact('users'))
            ->with('i', (\request()->input('page', 1) - 1)*10);

    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        $input = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password'])
        ]);
        $role = Role::where('name', 'User')->first();
        $user->role()->attach($role, ['created_at' => now(), 'updated_at' =>now()]);

        return redirect()->back()->with('success', 'User created successfully');
    }

    public function destroy(Request $request){
        $user = User::findOrFail($request->id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');

    }
}
