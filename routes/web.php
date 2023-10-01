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
Route::get('/about',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact',[HomeController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us',[HomeController::class, 'contactUs']);
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/product-detail',[HomeController::class, 'productDetail'])->name('productDetail');