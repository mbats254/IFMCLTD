<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/product', 'AdminController@add_product')->name('add.product');
Route::post('/post/product', 'AdminController@post_product')->name('post.product');
Route::get('/add/service', 'AdminController@add_service')->name('add.service');
Route::get('/add/site/content', 'AdminController@add_site_content')->name('add.site.content');
Route::post('/post/site/content', 'AdminController@post_site_content')->name('post.site_content');
Route::get('/add/team/member', 'AdminController@add_team_member')->name('add.team.member');
Route::post('/post/team/member', 'AdminController@post_team_member')->name('post.team.member');
Route::post('/post/service', 'AdminController@post_service')->name('post.service');