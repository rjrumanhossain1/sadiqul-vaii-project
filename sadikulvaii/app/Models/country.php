<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $table = "countries";
    protected $fillabe =[
        'country_name',
        'country_slug',
        'block',
        'status',
    ];
}
