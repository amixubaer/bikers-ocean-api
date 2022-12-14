<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//registration and login api
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

//product api
Route::post('addproduct', [ProductController::class, 'addProduct']);
Route::get('allproduct', [ProductController::class, 'allProduct']);
Route::get('latestproduct', [ProductController::class, 'latestProduct']);
Route::delete('deleteproduct/{id}', [ProductController::class, 'deleteProduct']);
Route::get('product/{id}', [ProductController::class, 'getProduct']);
Route::put('updateproduct/{id}', [ProductController::class, 'updateProduct']);
Route::get('search/{key}', [ProductController::class, 'search']);


//about api
Route::get('about', [AboutController::class, 'about']);
Route::post('about/edit/{id}', [AboutController::class, 'edit']);

//testimonial api
Route::post('addtestimonial', [TestimonialController::class, 'addTestimonial']);
Route::get('testimonial', [TestimonialController::class, 'testimonial']);

//faq api
Route::post('addfaq', [FaqController::class, 'addFaq']);
Route::post('updatefaq/{id}', [FaqController::class, 'updateFaq']);
Route::delete('deletefaq/{id}', [FaqController::class, 'deleteFaq']);
Route::get('faq', [FaqController::class, 'faq']);
