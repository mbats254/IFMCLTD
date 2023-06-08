<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', 'WelcomeController@welcome'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add/product', [App\Http\Controllers\AdminController::class, 'add_product'])->name('add.product');
Route::get('/add/faq', [App\Http\Controllers\AdminController::class ,'add_faq'])->name('add.faq');
Route::get('/admin/all/products', [App\Http\Controllers\AdminController::class, 'all_product'])->name('all.products');
Route::get('/admin/all/services', [App\Http\Controllers\AdminController::class ,'all_services'])->name('all.services');
Route::get('/admin/edit/product/{uniqid}', [App\Http\Controllers\AdminController::class,'edit_product'])->name('edit.product');
Route::get('/admin/edit/service/{uniqid}', [App\Http\Controllers\AdminController::class,'edit_service'])->name('edit.service');
Route::get('/admin/delete/product/{uniqid}', [App\Http\Controllers\AdminController::class,'delete_product'])->name('delete.product');
Route::get('/admin/delete/service/{uniqid}', [App\Http\Controllers\AdminController::class,'delete_service'])->name('delete.service');
Route::get('/add/testimonial', [App\Http\Controllers\AdminController::class,'add_testimonial'])->name('add.testimonial');
Route::post('/post/product', [App\Http\Controllers\AdminController::class,'post_product'])->name('post.product');
Route::get('/add/service', [App\Http\Controllers\AdminController::class,'add_service'])->name('add.service');
Route::get('/add/site/content', [App\Http\Controllers\AdminController::class,'add_site_content'])->name('add.site.content');
Route::post('/post/site/content', [App\Http\Controllers\AdminController::class,'post_site_content'])->name('post.site_content');
Route::post('/post/edit/product', [App\Http\Controllers\AdminController::class,'post_edit_product'])->name('post.edit.product');
Route::post('/post/edit/service', [App\Http\Controllers\AdminController::class,'post_edit_service'])->name('post.edit.service');
Route::post('/post/faq', [App\Http\Controllers\AdminController::class,'post_faq'])->name('post.faq');
// Route::post('/post/edit/product', [App\Http\Controllers\AdminController::class,'post_edit_product'])->name('post.edit.product');
Route::get('/add/team/member', [App\Http\Controllers\AdminController::class,'add_team_member'])->name('add.team.member');
Route::post('/post/team/member', [App\Http\Controllers\AdminController::class,'post_team_member'])->name('post.team.member');
Route::post('/post/service', [App\Http\Controllers\AdminController::class,'post_service'])->name('post.service');
Route::post('/post/testimonial', [App\Http\Controllers\AdminController::class,'post_testimonial'])->name('post.testimonial');