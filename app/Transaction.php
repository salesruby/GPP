<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['user_id', 'transaction_id', 'name', 'email', 'phone', 'service_id', 'status'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
