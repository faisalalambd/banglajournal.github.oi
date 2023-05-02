<?php

namespace App\Http\Controllers;

use App\Models\analytics;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analytics=Analytics::orderby('id','DESC')->paginate(1);
        return view('admin.analytics.index',compact('analytics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.analytics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $analytics= Analytics::create([
            'code_analytics'=>$request->code_analytics,         
            
            
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function show(analytics $analytics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function edit(analytics $analytic)
    {
        return view('admin.analytics.edit',compact('analytic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analytics $analytics)
    {
        $analytics->code_analytics=$request->code_analytics;
      
      
        $analytics->save();
         
         
         return redirect()->route('analytic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\analytics  $analytics
     * @return \Illuminate\Http\Response
     */
    public function destroy(analytics $analytics)
    {
        //
    }
}
