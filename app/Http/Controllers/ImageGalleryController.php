<?php

namespace App\Http\Controllers;

use App\Models\image_gallery;
use Illuminate\Http\Request;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = image_gallery::orderby('id', 'DESC')->paginate(100);
        return view('admin.image_gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image_gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_gallery = image_gallery::create([
            'title' => $request->title,
            'image' => 'image.jpg',
            'home_page' => $request->home_page,
            'slider' => $request->slider,

        ]);
        //image upload
        if ($request->has('image')) {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/post', $image_new_name);
            $image_gallery->image = '/storage/post/' . $image_new_name;
            $image_gallery->save();
        }
        //image upload

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function show(image_gallery $image_gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(image_gallery $image_gallery)
    {
        return view('admin.image_gallery.edit', compact('image_gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image_gallery $image_gallery)
    {
        $image_gallery->title = $request->title;
        $image_gallery->image = $request->image;
        // $news->Str::slug($request->title);
        $image_gallery->home_page = $request->home_page;


        //  image upload
        if ($request->has('image')) {
            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('website/images', $image_new_name);
            $image_gallery->image = 'website/images/' . $image_new_name;
        }
        $image_gallery->save();


        return redirect()->route('image_gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\image_gallery  $image_gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(image_gallery $image_gallery)
    {
        if ($image_gallery) {
            $image_gallery->delete();

            return redirect()->route('image_gallery.index');
        }
    }
}
