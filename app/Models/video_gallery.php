<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video_gallery extends Model
{
    use HasFactory;
    protected $guarded=['created_at','updated_at'];
    protected $fillable=['title','link','home_page','big_videos'];
}
