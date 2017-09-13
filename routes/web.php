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

Route::get('/', [
    'as' => 'front.index',
    'uses' => 'FrontController@index'
]);

Route::get('categories/{name}', [
    'as' => 'front.search.category',
    'uses' => 'FrontController@searchCategory'
]);

Route::get('tags/{name}', [
    'as' => 'front.search.tag',
    'uses' => 'FrontController@searchTag'
]);


Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
//prefix para que en las rutas de todo el grupo sea localhost/admin/...

    Route::get('/', ['as' => 'admin.index',function () {
        return view('admin.index');
    }]);

    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as' => 'users.destroy'
    ]);

    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'categories.destroy'
    ]);

    Route::resource('tags','TagsController');
    Route::get('tags/{id}/destroy',[
        'uses' => 'TagsController@destroy',
        'as' => 'tags.destroy'
    ]);

    Route::resource('articles','ArticlesController');
    Route::get('articles/{id}/destroy',[
        'uses' => 'ArticlesController@destroy',
        'as' => 'articles.destroy'
    ]);

    Route::get('images',[
        'uses' => 'ImagesController@index',
        'as' => 'images.index'
    ]);


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', 'HomeController@index2')->name('welcome');
