<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\wellComeController;
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

//to my home page
Route :: get('/',[wellComeController::class,'index']) -> name('wellcome.index');

//to blog page
Route::get('/blog',[BlogController::class,'index']) -> name('blog.index');

//to single blog post

Route::get('/blog/single-blog-post',[BlogController::class,'show']) -> name('blog.show');

//to about page
Route::get('/about', function(){
     return view('about');
})-> name('about');

// to contact page 

Route::get('/contact',[contactController::class, 'index']) -> name('contact.index');