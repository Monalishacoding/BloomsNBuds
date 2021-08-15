<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "short_description",
        "image",
        "meta_title",
        "meta_description",
        "status"
    ];
}