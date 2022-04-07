<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "short_description",
        "image",
        "meta_title",
        "meta_description",
        "status",
        "slug"
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value , '-');
    }

    public function categoryList() {
        return $this->hasMany(CategoryList::class );
    }
}
