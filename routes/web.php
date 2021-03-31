<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homepage','App\Http\controllers\UserController@index')->name('homepage');
Route::get('/about','App\Http\controllers\UserController@about')->name('about');
Route::get('/service','App\Http\controllers\UserController@service')->name('service');
Route::get('/product','App\Http\controllers\UserController@product')->name('product');
Route::get('/team','App\Http\controllers\UserController@team')->name('team');
Route::get('/pricing','App\Http\controllers\UserController@pricing')->name('pricing');
Route::get('/Blog','App\Http\controllers\UserController@Blog')->name('Blog');
Route::get('/contact','App\Http\controllers\UserController@contact')->name('contact');
//product detail
Route::get('/productdetail/{id}','App\Http\Controllers\UserController@productdetail')->name('productdetail');
Route::get('/searchresult','App\Http\Controllers\UserController@search')->name('searchproduct');

//admin controller

Route::get('/admin/home','App\Http\controllers\AdminController@index')->name('admin.home');


Route::get('/admin/addcategory','App\Http\controllers\AdminController@addcategory')->name('admin.addcategory');

Route::post('/admin/storecategory','App\Http\controllers\AdminController@storecategory')->name('admin.storecategory');




Route::get('/admin/addproduct','App\Http\Controllers\AdminController@addproduct')->name('admin.addproduct');

Route::post('/admin/storeproduct','App\Http\Controllers\AdminController@storeproduct')->name('admin.storeproduct');

Route::get('/admin/showproduct','App\Http\Controllers\AdminController@showproduct')->name('admin.showproduct');	

//showcategory
Route::get('/admin/showcategory','App\Http\Controllers\AdminController@showcategory')->name('admin.showcategory');	








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
