<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
