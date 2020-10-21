<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoCategory extends Model
{
    protected $fillable = ['name', 'title'];

    public function photo(){
        return $this->hasMany(Gallery::class, 'photo_categories_id');
    }
}
