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

    Route::get('/', 'HomeController@index');


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    //Route::get('/admin', 'AdminController@index');

    Route::get('/logout', 'Auth\LoginController@logout');


    Route::get('/post/{id}', ['as'=>'front.post','uses'=>'AdminPostsController@post']);







    Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'AdminController@index')->name('admin.home');


    Route::resource('admin/users', 'AdminUserController');

    Route::resource('admin/categories', 'AdminCategoryController');

    Route::resource('admin/posts', 'AdminPostsController');


    });










