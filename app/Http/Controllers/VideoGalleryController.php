<?php

namespace App\Http\Controllers;

use App\Models\video_gallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=video_gallery::orderby('id','DESC')->paginate(100);
        return view('admin.video_gallery.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video_gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video_gallery= video_gallery::create([
            'title'=>$request->title,               
            'link'=>$request->link,               
            'big_videos'=>$request-> big_videos,               
            
            'home_page'=>$request->home_page,
           
        ]); 
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video_gallery  $video_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(video_gallery $video_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video_gallery  $video_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(video_gallery $video_gallery)
    {
        return view('admin.video_gallery.edit',compact('video_gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video_gallery  $video_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video_gallery $video_gallery)
    {
        $video_gallery->title=$request->title;
        $video_gallery->link=$request->link;
       
          $video_gallery->home_page=$request->home_page;
         
           
        
         $video_gallery->save();
          
          
          return redirect()->route('video_gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video_gallery  $video_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(video_gallery $video_gallery)
    {
        //
    }
}
