<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'slug',
        'content',
        'images',
        'mobile_number',
        'email',
       'age',
        'user_id',
        'category_id',
        'sub_category_id',
        'country_id',
        'state_id',
        'city_id',
        'premium',
        'sponsor',
        'expire_date',
        'status',
    ];
}
