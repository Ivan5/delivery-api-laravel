<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{
    Route::resource('/users','Admin\UsersController',['as' => 'admin']);
    Route::resource('/categories','Admin\CategoriesController',['as' => 'admin']);
    Route::resource('/subcategories','Admin\SubcategoriesController',['as' => 'admin']);
    Route::resource('/products','Admin\ProductsController',['as' => 'admin']);
    Route::resource('/orders','Admin\OrdersController',['as' => 'admin']);
    Route::resource('/details','Admin\DetailsController',['as' => 'admin']);

    Route::resource('/portadas','Admin\PortadasController',['as' => 'admin']);
    Route::resource('/posts','Admin\PostsController',['as' => 'admin']);
});

Route::group(['prefix' => 'client','middleware' => 'role:client'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    
});
