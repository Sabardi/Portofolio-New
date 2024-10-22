<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Portofolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'photo',
        'content',
        'author',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}
