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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/contact', [\App\Http\Controllers\FrontendController::class, 'contact_page'])->name('contact_page');

Route::get('/business-intelligence', [\App\Http\Controllers\FrontendController::class, 'business_intelligence_page'])->name('business_intelligence_page');

Route::get('/ecima_group', [\App\Http\Controllers\FrontendController::class, 'ecima_group_page'])->name('ecima_group_page');

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index_page'])->name('index_page');

Route::get('/home', [\App\Http\Controllers\FrontendController::class, 'index_page'])->name('home');

Route::get('/about-us', [\App\Http\Controllers\FrontendController::class, 'about_us_page'])->name('about_us_page');

Route::get('/a-propos-de-nous',[\App\Http\Controllers\FrontendController::class, 'a_propos_de_nous_page'] )->name('a_propos_de_nous_page');

Route::post('/admin_store_message/', [\App\Http\Controllers\FrontendController::class, 'storeMessage'])->name('admin_store_message_page');


