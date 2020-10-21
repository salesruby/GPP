<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['name', 'attachment', 'photo_categories_id'];

    public function category(){
        return $this->belongsTo(PhotoCategory::class, 'photo_categories_id');
    }
}
