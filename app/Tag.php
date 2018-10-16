<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    
    protected $fillable = ['id', 'name', 'slug', 'created_at', 'updated_at'];
    
    
    public function posts()
    {
        
        return $this->belongsToMany('\App\Post');
        
    }
}
