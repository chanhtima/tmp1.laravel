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

Route::prefix('')->group(function() {
    Route::get('/', 'FrontendController@index');
    Route::get('/about', 'FrontendController@about');
    Route::get('/policy', 'FrontendController@policy');
    Route::get('/contacts', 'FrontendController@contacts');
    Route::get('/dissertation-details', 'FrontendController@dissertationDetails');
    Route::get('/dissertation', 'FrontendController@dissertation');
    Route::get('/disseraticle-details', 'FrontendController@disserAticleDetails');
    Route::get('/disser-aticle', 'FrontendController@disserAticle');
    Route::get('/disser-video', 'FrontendController@DisserVideo');
});
