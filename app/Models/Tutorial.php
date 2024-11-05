<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Tutorial extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'category_id'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

// In App\Models\Article.php
public function category(): BelongsTo
{
    return $this->belongsTo(Categori::class);
}
}
