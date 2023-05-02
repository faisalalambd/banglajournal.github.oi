<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/','App\Http\Controllers\frontendController@slider')->name('slider');
Route::get('details','App\Http\Controllers\frontendController@details')->name('details');
// Route::get('category','App\Http\Controllers\frontendController@category')->name('category');
Route::get('newsDetails/{slug}','App\Http\Controllers\frontendController@newsDetails')->name('newsDetails');
Route::get('category/{category_name}','App\Http\Controllers\frontendController@categoryNews')->name('categoryNews');
// Route::get('categorywise','App\Http\Controllers\frontendController@categorywise')->name('categorywise');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' =>'admin', 'middleware'=>['auth']],function(){
    Route::resource('slider','App\Http\Controllers\SliderController');
    Route::resource('headlines','App\Http\Controllers\HeadlinesController');
    Route::resource('image_gallery','App\Http\Controllers\ImageGalleryController');
    Route::resource('video_gallery','App\Http\Controllers\VideoGalleryController');
    Route::resource('news','App\Http\Controllers\NewsController');
    Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('analytic','App\Http\Controllers\AnalyticsController');
});
