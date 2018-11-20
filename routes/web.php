<?php

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


Route::group(['namespace' => 'Site'], function () {
    Route::get('/test', function(){
        $data = [];
    
    });

    Route::get('/', 'SiteController@index');

    Route::group(['namespace' => 'Category'], function(){
        Route::get('/ch{id}', 'CategoryController@index');
        Route::get('/pr{id}', 'CategoryController@prodsChannel');
    });
    Route::group(['namespace' => 'News'], function(){
        
        Route::get('/test', 'NewsController@index');
        Route::get('/ch{ch}/{new}.html', 'NewsController@index');
    });

    Route::group(['namespace' => 'Prods'], function(){
        Route::get('/pr{ch}/{new}.html', 'NewsController@index');
    });
});