<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
                            'title_ar' , 
                            'title_en' , 
                            'logo' , 
                            'description_ar' , 
                            'description_en' , 
                            'about_ar' , 
                            'about_en'
                        ];
}
