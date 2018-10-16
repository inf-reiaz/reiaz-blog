<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "abouts";
    
    protected $fillable = [
            'id',
            'image',
            'about',
            'created_at', 
            'updated_at'
        ];
    
}
