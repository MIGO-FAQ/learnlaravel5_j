<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');*/

Route::get('/', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('pages/{id}', 'PagesController@show');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminHomeController@index');
    //Route::resource('/','AdminHomeController');
    Route::resource('pages', 'PagesController');
});

//12
Route::get('hello', 'HelloController@hello');
Route::get('hellofaq', 'HelloController@hello_faq');
Route::group(['prefix' => 'api'], function () {
    Route::get('pages', 'ApiController@index');
});
Route::resource('mypages', 'HelloController');


Route::resource('articles', 'ArticleController');
Route::get('articles/{id}/delete', [
    'as' => 'articles.delete',
    'uses' => 'ArticleController@destroy',
]);

Route::resource('api/articles', 'API\ArticleAPIController');

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => '$NAMESPACE_API_CONTROLLER$'], function () {
    Route::group(['prefix' => 'v1'], function () {
        include_once Config::get('generator.path_api_routes');
    });
});
