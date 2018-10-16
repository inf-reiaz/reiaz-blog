<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{    
    protected $table = "videos";
    
    protected $fillable = ['id', 'info', 'link', 'created_at', 'updated_at'];
    
}
