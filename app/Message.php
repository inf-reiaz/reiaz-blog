<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    
    protected $fillable = ['id', 'name', 'email','body', 'created_at', 'updated_at'];
}
