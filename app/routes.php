<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'SiteController@index');
Route::post('/', 'SiteController@login');
Route::get('/logout', 'SiteController@logout');

Route::get('/login', function(){

    return Redirect::to('/');

});


Route::filter('guest', function()
{
    if (Auth::check())
        return Redirect::route('home')
            ->with('flash_notice', 'You are already logged in!');
});




Route::group(array('before' => 'auth'), function() {

    Route::get('/dashboard', 'BackendController@index');
    Route::get('/admin/addstations', 'BackendController@addstations');
    Route::post('/admin/addstations', 'BackendController@createstation');
    Route::get('/admin/stations', 'BackendController@stations');
    Route::get('/admin/category', 'BackendController@category');
    Route::get('/admin/addcategory', 'BackendController@addcategory');
    Route::post('/admin/addcategory', 'BackendController@createcategory');
    Route::get('/admin/destroycategory/{id}','BackendController@destroycategory' );
    Route::get('/admin/categoryupdate/{id}', 'BackendController@categoryupdate');
    Route::post('/admin/categoryupdate/{id}', 'BackendController@postcategoryupdate');

    Route::get('/admin/stationdelete/{id}', 'BackendController@stationdelete');
    Route::get('/admin/stationupdate/{id}', 'BackendController@stationupdate');

    Route::post('/admin/stationupdate/{id}', 'BackendController@stationupdatesave');

    Route::get('/admin/updateaccount', 'BackendController@updateaccount');
    Route::post('/admin/updateaccount', 'BackendController@updateaccountsave');

    Route::get('/admin/updateaccountpassword', 'BackendController@updateaccountpassword');
    Route::post('/admin/updateaccountpassword', 'BackendController@updateaccountpasswordsave');


    Route::get('/admin/stationview/{id}', 'BackendController@stationview');


});


