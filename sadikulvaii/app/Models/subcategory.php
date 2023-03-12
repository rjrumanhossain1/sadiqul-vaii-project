<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";
    protected $fillable =
    [
        'sub_category_name',
        'sub_category_slug',
        'category_id',
        'alert',
        'status',
        'meta_title',
        'meta_desc',
        'meta_tag'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
