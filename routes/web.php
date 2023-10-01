<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about-us',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us',[HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us',[HomeController::class, 'contactUs']);
Route::get('/products',[HomeController::class, 'products'])->name('products');
Route::get('/product-detail',[HomeController::class, 'productDetail'])->name('productDetail');