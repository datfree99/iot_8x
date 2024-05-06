<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\OnePageController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product/{slug}', [HomeController::class, 'productDetail'])->name('productDetail');

Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/service/{slug}', [HomeController::class, 'serviceDetail'])->name('serviceDetail');

Route::get('/solution', [HomeController::class, 'solution'])->name('solution');
Route::get('/solution/{slug}', [HomeController::class, 'solution'])->name('solutionDetail');

Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/customers', [HomeController::class, 'customers'])->name('customers');
ROute::get('/contact', [HomeController::class, 'contact'])->name('contact');


//===================Admin=========================

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', function () {
        return view('layouts.admin_v2');
    })->name('dashboard');

//    Route::resource('product', 'ProductController')->except('show');
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('slider', 'SliderController')->except('show');
    Route::resource('post', 'PostController')->except('show');

    Route::get('about-us', [OnePageController::class, 'aboutUs'])->name('about-us');
    Route::post('about-us', [OnePageController::class, 'aboutUsStore']);
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

