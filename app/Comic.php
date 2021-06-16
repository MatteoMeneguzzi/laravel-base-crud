<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //
    protected $table = 'comics';
    
    // Mass assign. (fillable)
    protected $fillable = [
        'title', 
        'slug',
        'description',
        'type',
        'price'
    ];
}
