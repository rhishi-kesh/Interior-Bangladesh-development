<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'btn_link',
        'btn_text',
        'background'
    ];
}
