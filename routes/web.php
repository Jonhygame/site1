<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\contactcontroller;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[sitecontroller::class,'landingpage'])->name('index');
Route::resource('contact', contactcontroller::class);
Route::post('/comments', [productcontroller::class,'commentsbd'])->name('commentsbd');
Route::get('/about',[sitecontroller::class,'aboutpage'])->name('about');
Route::get('/faq',[sitecontroller::class,'faqpage'])->name('faq');
Route::get('/shop',[productcontroller::class,'shoppage'])->name('shop');
Route::get('/products', [sitecontroller::class,'products'])->name('products');
Route::get('/categories',[sitecontroller::class,'categories'])->name('categories');
Route::get('/detailproducts/{id}',[productcontroller::class,'detailproductspage'])->name('detailproducts');



