<?php


namespace App\Http\View\Composers;
use App\Contact;
use App\Order;
use App\Role;
use Carbon\Carbon;
use Illuminate\View\View;


class Statistics
{
    public function compose(View $view)
    {
        $new_order = Order::whereDate('created_at', Carbon::today())->count();
        $role = Role::with('users')->where('name', 'Client')->first();
        $admin = Role::with('users')->whereIn('name', ['User'])->first();
        $admins = $admin->users->count();
        $new_client = $role->users->count();
        $new_contact = Contact::whereDate('created_at', Carbon::today())->count();
        return $view->with(['new_order' => $new_order, 'new_client' => $new_client, 'new_contact'=> $new_contact, 'admins'=>$admins]);
    }
}
