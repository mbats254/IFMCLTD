<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name ', "position",'bio','photo', 'uniqid'
    ];
}
