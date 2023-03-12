<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable =
    [
        'name',
        'slug',
        'cat_id',
        'subcat_id',
        'short_des',
        'long_des',
        'price',
        'qty',
        'image',
        'status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcat_id','id');
    }
}
