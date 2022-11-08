<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $fillable = [
        'company_summary', 'snapshot_array', 'uniqid','vision','mission','innovationn_summary',"training_program_summary","our_goal"
    ];
}
