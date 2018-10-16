<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "sliders";
    
    protected $fillable = [
            'id',
            'title',
            'image',
            'created_at', 
            'updated_at'
        ];
    
}
