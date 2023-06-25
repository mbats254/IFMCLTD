<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name ', 'email', 'user_id', 'uniqid'
    ];

    public function user()
    {
        return $this->belongsTo('App\User'); //this defines a one to many relationship(inverse)
    }


}
