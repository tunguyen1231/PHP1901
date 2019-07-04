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

Route::get('/', function () {
    return view('welcome');
});

/*
 * Route cho admin manager
 */
Route::prefix('admin')->group(function (){
    //Quản lý sản phẩm
    Route::prefix('/products')->group(function (){
        /*
        * View cho CRUD
        */
        Route::get('/','Backend\ProductController@index');
        Route::get('/create','Backend\ProductController@create');
        Route::get('/edit/{id}','Backend\ProductController@edit');
        Route::get('/delete/{id}','Backend\ProductController@delete');
        /*
         * Route để thực thi CRUD
         */
        Route::post('/','Backend\ProductController@store');
        Route::post('/edit/{id}','Backend\ProductController@update');
        Route::post('/delete/{id}','Backend\ProductController@destroy');
    });
});
