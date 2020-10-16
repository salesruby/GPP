<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function role(){
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function hasAnyRoles($roles){
        return null !== $this->role()->whereIn('name', $roles)->first();
    }

    public function hasRole($role){
        return null !== $this->role()->where('name', $role)->first();
    }

    public function order(){
        return $this->hasMany(Order::class)
            ->with('response');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

}
