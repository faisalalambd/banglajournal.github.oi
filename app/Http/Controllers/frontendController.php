<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video_gallery;
use App\Models\News;
use App\Models\category;
use App\Models\image_gallery;

class frontendController extends Controller
{
    public function slider()
    {
        $scrolls = News::where('scroll', 'on')->orderBy('id', 'DESC')->paginate(200);
        $sliders = News::where('head_news', 'on')->orderBy('id', 'DESC')->paginate(200);
        $latests = News::orderBy('id', 'DESC')->paginate(4);
        $newss = News::where('home_page', 'on')->orderby('id', 'DESC')->paginate(6);
        $national = News::where('category', 'national')->where('category_head', 'on')->orderby('id', 'desc')->paginate(3);
        $politics = News::where('category', 'politics')->orderby('id', 'desc')->paginate(3);
        $trade = News::where('category', 'trade')->where('category_head', 'on')->orderby('id', 'desc')->paginate(1);
        $tradenews = News::where('category', 'trade')->orderby('id', 'desc')->paginate(3);
        $image_slides = image_gallery::where('slider', 'on')->orderby('id', 'desc')->paginate(50);
        $image_homes = image_gallery::where('home_page', 'on')->orderby('id', 'desc')->paginate(50);
        $video_big = video_gallery::where('big_videos', 'on')->orderby('id', 'desc')->paginate(50);
        $video_homes = video_gallery::where('home_page', 'on')->orderby('id', 'desc')->paginate(50);
        return view('website.home', compact('scrolls', 'sliders', 'latests', 'newss', 'national', 'politics', 'trade', 'tradenews', 'image_slides', 'image_homes','video_big','video_homes'));
    }



    public function newsDetails($slug)
    {

        $news = News::where('slug', $slug)->get();
        $popular = News::select('popular')->where('slug', $slug)->value('popular');
        $popular++;
       
        $latests = News::orderby('id', 'desc')->paginate(9);
        $categories = Category::orderby('id', 'ASC')->paginate(8);
        
        return view('website.details', compact('news', 'categories', 'latests','popular'));
    }

    public function category()
    {
        return view('website.category');
    }

    public function categoryNews($category_name)
    {

        $news = News::where('category', $category_name)->get();
        $news_heads=News::where('category', $category_name)->where('category_head', 'on')->get();
        return view('website.category', compact('news','news_heads'));
    }
    
}
