<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['location_ar' , 'location_en' , 'email' , 'call' , 'open_ar' , 'open_en'];
}
