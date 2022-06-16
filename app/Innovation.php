<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    protected $fillable = [
        'name ', 'description', 'link','media', 'type','uniqid'
    ];
}
