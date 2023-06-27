<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
   
    protected $fillable = [
       'page_photo','name', 'what_we_offer', 'price', 'icon','uniqid', 'service_description','descriptional_listing','list_item_description','how_we_can_help'
    ];
}
