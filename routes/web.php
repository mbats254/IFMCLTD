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


Route::get('/', 'WelcomeController@welcome')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/product', 'AdminController@add_product')->name('add.product');
Route::get('/admin/all/products', 'AdminController@all_product')->name('all.products');
Route::get('/admin/all/services', 'AdminController@all_services')->name('all.services');
Route::get('/admin/edit/product/{uniqid}', 'AdminController@edit_product')->name('edit.product');
Route::get('/admin/edit/service/{uniqid}', 'AdminController@edit_service')->name('edit.service');
Route::get('/admin/delete/product/{uniqid}', 'AdminController@delete_product')->name('delete.product');
Route::get('/admin/delete/service/{uniqid}', 'AdminController@delete_service')->name('delete.service');
Route::get('/add/testimonial', 'AdminController@add_testimonial')->name('add.testimonial');
Route::post('/post/product', 'AdminController@post_product')->name('post.product');
Route::get('/add/service', 'AdminController@add_service')->name('add.service');
Route::get('/add/site/content', 'AdminController@add_site_content')->name('add.site.content');
Route::post('/post/site/content', 'AdminController@post_site_content')->name('post.site_content');
Route::post('/post/edit/product', 'AdminController@post_edit_product')->name('post.edit.product');
Route::post('/post/edit/service', 'AdminController@post_edit_service')->name('post.edit.service');
// Route::post('/post/edit/product', 'AdminController@post_edit_product')->name('post.edit.product');
Route::get('/add/team/member', 'AdminController@add_team_member')->name('add.team.member');
Route::post('/post/team/member', 'AdminController@post_team_member')->name('post.team.member');
Route::post('/post/service', 'AdminController@post_service')->name('post.service');
Route::post('/post/testimonial', 'AdminController@post_testimonial')->name('post.testimonial');