<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_gallery extends Model
{
    use HasFactory;
    protected $guarded=['created_at','updated_at'];
    protected $fillable=['title','image','home_page','slider'];
}
