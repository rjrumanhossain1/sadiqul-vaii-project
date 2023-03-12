<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table = "ads";
    protected $fillable =[
        'url',
        'title',
        'age',
        'type'
    ];
}
