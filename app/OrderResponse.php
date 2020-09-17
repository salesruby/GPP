<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderResponse extends Model
{
    protected $table = 'order_responses';

    protected $fillable = ['user_id', 'order_id', 'attachment', 'description'];
}
