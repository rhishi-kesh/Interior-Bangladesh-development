<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'choose_us',
        'choose_us_image',
        'mission',
        'mission_image',
        'vision',
        'vision_image',
        'project_completed',
        'ongogin_project',
        'ongogin_project',
        'employe',
        'experiance',
    ];
}
