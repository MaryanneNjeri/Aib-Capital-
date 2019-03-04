<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    // 
    protected $fillable = [

        'name','telephone_number','email','location','query'
    ];
}
