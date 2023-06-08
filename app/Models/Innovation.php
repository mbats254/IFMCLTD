<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Innovation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name ', 'description', 'link','media', 'type','uniqid'
    ];
}
