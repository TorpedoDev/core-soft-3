<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $fillable = ['name_en' , 'name_ar' , 'description_en' , 'description_ar' , 'image' , 'type'];
}
