<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteResponse extends Model
{
    protected $fillable = ['quote_id', 'attachment', 'description'];
}
