<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['description', 'attachment', 'user_id', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public const ORDER_VALIDATION_RULES = [
            'description' => 'required|string',
            'attachment' => 'max:2048',
            'user_id' => 'required'
        ];

    public function response(){
        return $this->hasMany(OrderResponse::class)->latest();
    }

}
