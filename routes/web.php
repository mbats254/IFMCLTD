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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', 'WelcomeController@welcome'])->name('welcome');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add/product', [App\Http\Controllers\AdminController::class, 'add_product'])->name('add.product');
Route::get('/add/category', [App\Http\Controllers\AdminController::class, 'add_category'])->name('add.category');
Route::get('/add/faq', [App\Http\Controllers\AdminController::class ,'add_faq'])->name('add.faq');
Route::get('/admin/all/products', [App\Http\Controllers\AdminController::class, 'all_product'])->name('all.products');
Route::get('/admin/all/services', [App\Http\Controllers\AdminController::class ,'all_services'])->name('all.services');
Route::get('/admin/all/descriptive_listing/{uniqid}', [App\Http\Controllers\AdminController::class ,'all_descriptive_listing'])->name('all.descriptive_listing');
Route::get('/admin/edit/product/{uniqid}', [App\Http\Controllers\AdminController::class,'edit_product'])->name('edit.product');
Route::get('/admin/edit/service/{uniqid}', [App\Http\Controllers\AdminController::class,'edit_service'])->name('edit.service');
Route::get('/admin/edit/contact/information/', [App\Http\Controllers\AdminController::class,'edit_contact_information'])->name('edit.contact.informtion');
Route::get('/admin/delete/product/{uniqid}', [App\Http\Controllers\AdminController::class,'delete_product'])->name('delete.product');
Route::get('/admin/delete/service/{uniqid}', [App\Http\Controllers\AdminController::class,'delete_service'])->name('delete.service');
Route::get('/add/testimonial', [App\Http\Controllers\AdminController::class,'add_testimonial'])->name('add.testimonial');
Route::post('/post/product', [App\Http\Controllers\AdminController::class,'post_product'])->name('post.product');
Route::post('/post/snapshot', [App\Http\Controllers\AdminController::class,'post_snapshot'])->name('post.snapshot');
// Route::get('/add/snapshot', [App\Http\Controllers\AdminController::class,'add_snapshot'])->name('add.snapshot');
Route::get('/add/service', [App\Http\Controllers\AdminController::class,'add_service'])->name('add.service');
Route::get('/add/site/content', [App\Http\Controllers\AdminController::class,'add_site_content'])->name('add.site.content');
Route::get('/add/snap/shot', [App\Http\Controllers\AdminController::class,'add_snap_shot'])->name('add.snap.shot');
Route::post('/post/site/content', [App\Http\Controllers\AdminController::class,'post_site_content'])->name('post.site_content');
Route::post('/post/edit/product', [App\Http\Controllers\AdminController::class,'post_edit_product'])->name('post.edit.product');
Route::post('/post/edit/service', [App\Http\Controllers\AdminController::class,'post_edit_service'])->name('post.edit.service');
Route::post('/post/faq', [App\Http\Controllers\AdminController::class,'post_faq'])->name('post.faq');
// Route::post('/post/edit/product', [App\Http\Controllers\AdminController::class,'post_edit_product'])->name('post.edit.product');
Route::get('/add/team/member', [App\Http\Controllers\AdminController::class,'add_team_member'])->name('add.team.member');
Route::post('/post/team/member', [App\Http\Controllers\AdminController::class,'post_team_member'])->name('post.team.member');
Route::post('/post/service', [App\Http\Controllers\AdminController::class,'post_service'])->name('post.service');
Route::post('/post/testimonial', [App\Http\Controllers\AdminController::class,'post_testimonial'])->name('post.testimonial');
Route::post('/post/edited/contact/information', [App\Http\Controllers\AdminController::class,'post_edit_contact_information'])->name('post.edit.contact.information');
});

// Site Routes

Route::get('/', [App\Http\Controllers\SiteController::class,'welcome'])->name('Welcome.us');

Route::get('/about', [App\Http\Controllers\SiteController::class,'about_us'])->name('about.us');
Route::get('/contact/us', [App\Http\Controllers\SiteController::class,'contact_us'])->name('contact.us');
Route::get('/service', [App\Http\Controllers\SiteController::class,'our_services'])->name('our.services');
Route::post('/post/suggestion/or/question/or/complain', [App\Http\Controllers\SiteController::class,'post_suggestion_complain_question'])->name('post.suggestion_complain_question');
Route::get('/single/service/{uniqid}', [App\Http\Controllers\SiteController::class,'single_service'])->name('single.service');
Route::post('/contact/us/post', [App\Http\Controllers\SiteController::class,'contact_us_post'])->name('contact.us.post');
Route::post('/newsletter/subscribe', [App\Http\Controllers\SiteController::class,'newsletter_subscribe'])->name('newsletter.subscribe');