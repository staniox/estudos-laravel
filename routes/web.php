<?php

use App\Http\Controllers\Site\HomeController;
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
Route::group(['namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('/', 'HomeController');

    Route::get('products', 'CategoryController@index');
    Route::get('products/{slug}', 'CategoryController@show');

    Route::get('blog', 'BlogController');

    Route::view('about', 'site.about.index');

    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@form');
});
