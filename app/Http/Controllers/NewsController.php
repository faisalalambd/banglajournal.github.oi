<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\headlines;
use App\Models\category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newss=News::orderby('id','DESC')->paginate(300);
        return view('admin.news.index',compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::orderby('id','desc')->paginate('30');
        return view('admin.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $headline=$request->title;
        //   dd($request->all());
          $head_news=$request->head_news;
           $news= News::create([
               'title'=>$request->title,               
               'image'=>'image.jpg', 
               'slug'=>Str::slug($request->title),
               'short_description'=>$request->short_description,
               'description'=>$request->description,
               'scroll'=>$request->scroll,
               'head_news'=>$request->head_news,
               'category'=>$request->category,
               'category_slug'=>Str::slug($request->category),
               'home_page'=>$request->home_page,
               'category_head'=>$request->category_head,
               
           ]); 
           //image upload
           if($request->has('image')){
          $image= $request->image;
          $image_new_name=time() . '.' .$image->getClientOriginalExtension();
          $image->move('storage/post',$image_new_name);
          $news->image='/storage/post/'. $image_new_name;
          $news->save();
    
           }    
           //image upload
         
           return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories=Category::orderby('id','desc')->paginate('30');
        return view('admin.news.edit',compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
       // dd($request->all());
       $news->title=$request->title;
       $news->image=$request->image;
        
         $news->short_description=$request->short_description;
         $news->description=$request->description;
         $news->scroll=$request->scroll;
         $news->head_news=$request->head_news;
         $news->category=$request->category;
         $news->home_page=$request->home_page;
        
          
       //  image upload
        if($request->has('image')){
           $image= $request->image;
           $image_new_name=time() . '.' .$image->getClientOriginalExtension();
           $image->move('website/images',$image_new_name);
           $news->image='website/images/'.$image_new_name;
        }
        $news->save();
         
         
         return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if($news){
            $news->delete();
            
            return redirect()->route('news.index');
        }
    }
}
