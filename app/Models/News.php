<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded=['created_at','updated_at'];
    protected $fillable=['title','slug','image','short_description','description','scroll','head_news','category','category_slug','home_page','category_head'];
}
