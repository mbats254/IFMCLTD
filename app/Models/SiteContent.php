<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_summary', 'snapshot_array', 'uniqid','vision','mission','innovationn_summary',"training_program_summary","our_goal"
    ];
}
