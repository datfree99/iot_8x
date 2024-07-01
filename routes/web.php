<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
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
Route::get('ve-chung-toi', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('san-pham', [HomeController::class, 'product'])->name('product');
Route::get('dich-vu', [HomeController::class, 'service'])->name('service');
Route::get('giai-phap', [HomeController::class, 'solution'])->name('solution');
Route::get('du-an', [HomeController::class, 'project'])->name('project');
Route::get('khach-hang', [HomeController::class, 'customers'])->name('customers');
Route::get('lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/p/{slug}', [HomeController::class, 'product'])->name('product.category');


Route::get('/c/{slug}', [PostController::class, 'detail'])->name('category.detail');
Route::get('san-pham/{slug}', [PostController::class, 'product'])->name('product.detail');
Route::get('giai-phap/{slug}', [PostController::class, 'solution'])->name('solution.detail');
Route::get('dich-vu/{slug}', [PostController::class, 'service'])->name('service.detail');
Route::get('du-an/{slug}', [PostController::class, 'project'])->name('project.detail');

Route::get('/change-language', function (\Illuminate\Http\Request $request) {
    $language = $request->input('lang');
    Session::put('language', $language);
    Session::save();
    return redirect()->back(); // Redirect the user back to the previous page
})->name('change-language');



//===================Admin=========================

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
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

