<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'image',
        'status',
        'slug',
        'is_featured',
        'sort',
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value , '-');
    }
}
