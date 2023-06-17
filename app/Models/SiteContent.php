<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $fillable = [
       'about_home_paragraph','about_us', 'snapshot_array', 'uniqid','vision','mission','innovationn_summary',"training_program_summary","our_goal"
    ];

    protected $table = "site_content";
}
