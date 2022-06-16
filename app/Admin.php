<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email','uniqid','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User'); //this defines a one to many relationship(inverse)
    }

}
