<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

public function gallery_category_name()
{
    return $this->belongsTo(Gallery_Category::class, 'gallery_category_id', 'id');
}
}
