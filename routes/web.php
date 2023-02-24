<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class,'index']);

Route::get('/standard_spa',[IndexController::class,'standard_spa']);
Route::get('/supreme',[IndexController::class,'supreme']);

Route::get('/blogs',[IndexController::class,'blogs']);
Route::get('/contact',[IndexController::class,'contact']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/loyality',[IndexController::class,'loyality']);
Route::get('/disclaimer-note',[IndexController::class,'disclaimer_note']);
Route::get('/privacy',[IndexController::class,'privacy']);
Route::get('/terms',[IndexController::class,'terms']);
Route::get('/faq',[IndexController::class,'faq']);
Route::get('/dashboard',[IndexController::class,'dashboard']);
Route::get('/packages',[IndexController::class,'packages']);
Route::get('/purchase_package',[IndexController::class,'purchase_package']);
Route::get('/supreme_package',[IndexController::class,'supreme_package']);
Route::get('/gift_massages',[IndexController::class,'gift_massages']);
Route::get('/appointment_history',[IndexController::class,'appointment_history']);
Route::get('/supreme_history',[IndexController::class,'supreme_history']);
Route::get('/favourite',[IndexController::class,'favourite']);
Route::get('/myprofile',[IndexController::class,'myprofile']);

Route::post('/submitenquiry',[IndexController::class,'submitenquiry']);
Route::post('/submitbusinesslist',[IndexController::class,'submitbusinesslist']);
Route::post('/sendloginotp',[IndexController::class,'sendloginotp']);
Route::get('/logout',[IndexController::class,'logout']);
Route::post('/submitmyprofile',[IndexController::class,'submitmyprofile']);
Route::get('/blog-details/{slug}',[IndexController::class,'blog_details']);



// Route::get('testapi',[IndexController::class,'testapi']);