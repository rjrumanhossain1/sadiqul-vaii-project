<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    use HasFactory;
    protected $table ="states";
    protected $fillable =[
        'state_name',
        'state_slug',
        'country_id',
        'status'
    ];

    public function country()
    {
        return $this->belongsTo(country::class,'country_id','id');
    }
}
