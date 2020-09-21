<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'description','attachment', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function response(){
        return $this->hasMany(QuoteResponse::class)->latest();
    }

}
