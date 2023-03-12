<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ="categories";
    protected $fillable =
    [
        'category_name',
        'category_slug',
        'category_desc',
        'block',
        'status',
        'meta_title',
        'meta_desc',
        'meta_tag'
    ];
}
