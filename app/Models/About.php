<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['title_ar' , 'title_en' , 'image' , 'imagedesc_ar' , 'imagedesc_en' , 'videodesc_ar' , 'videodesc_en' , 'video_image' , 'video_link'];
}
