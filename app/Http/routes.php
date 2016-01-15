<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
  return view('layout');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

/* AngularJS Routes start */
Route::get('/partials/index', function () {
  return view('partials.index');
});

Route::get('/partials/{category}/{action?}', function ($category, $action = 'index') {
  return view(join('.', ['partials', $category, $action]));
});

Route::get('/partials/{category}/{action}/{id}', function ($category, $action = 'index', $id) {
  return view(join('.', ['partials', $category, $action]));
});
/* AngularJS Routes end */

/* API start */
Route::group(['prefix' => 'api'], function(){
  Route::group(['prefix' => 'poems'], function(){
    Route::get('names', 'PoemController@names');
    Route::get('get_poem', 'PoemController@get_poem');
  });

  Route::group(['prefix' => 'languages'], function(){
    Route::get('/', 'LanguageController@index');
  });
});
/* API end */
