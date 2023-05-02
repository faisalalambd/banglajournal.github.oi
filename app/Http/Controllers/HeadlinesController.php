<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\headlines;
use Illuminate\Http\Request;

class HeadlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headlines=News::where('head_news','on')->orderby('id','Desc')->paginate(100);
        return view('admin.headlines.index',compact('headlines')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\headlines  $headlines
     * @return \Illuminate\Http\Response
     */
    public function show(headlines $headlines,$id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\headlines  $headlines
     * @return \Illuminate\Http\Response
     */
    public function edit(headlines $headlines)
    {
        return $headlines;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\headlines  $headlines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, headlines $headlines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\headlines  $headlines
     * @return \Illuminate\Http\Response
     */
    public function destroy(headlines $headlines,$id)
    {
        return $id;
    }
}
