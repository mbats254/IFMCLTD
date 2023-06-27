<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;
  
    protected $fillable = [
       'P_O_address', 'name ', 'map_link', 'email', 'uniqid', 'phone_number','physical_location'
    ];

    protected $table = "contact_information";
}
