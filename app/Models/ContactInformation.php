<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name ', 'email', 'uniqid', 'phone_number'
    ];

    protected $table = "contact_information";
}
