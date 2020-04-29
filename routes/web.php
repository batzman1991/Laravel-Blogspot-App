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

 Route::get('/','PagesController@index');
 Route::get('/about','PagesController@about');
 Route::get('/services','PagesController@services');
 Route::resource('posts','PostsController');
 //Route::get('/ckeditor', 'CkeditorController@index');

// Route::get('/', function() {
//     return 'Hello World '; 
// }); 

// Route::get('/test', function(){
//     return view('test');
// });

 //Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    if(Auth::check()){return Redirect::to('home');}
     return view('pages/index');
 });

// what is the profile route ? just show the profile
// so you need one that says edit
// one that process the edit 
// and one that deletes the profile 
 Route::get('profile','UserController@profile');
 Route::get('profle','Usercontroller@profilepub');
 Route::Post('profile','UserController@update_profile');

Route::get('test','UserController@index');
 
//  Route::get('profile.edit','UserController@editProfile');

