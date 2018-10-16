<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";
    
    protected $fillable = [
            'id',
            'website_name',
            'website_author',
            'website_logo',
            'website_description',
            'website_keywords',
            'facebook', 
            'twitter',
            'google_plus',
            'linkedin',
            'github',
            'instagram',
            'youtube'
        ];
    
}
