<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;


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
Route::get('/our-portfolio',[HomeController::class, 'ourPortfolio'])->name('ourPortfolio');
Route::get('/all-photos',[HomeController::class, 'allPhotos'])->name('allPhotos');
Route::get('/all-videos',[HomeController::class, 'allVideos'])->name('allVideos');
Route::post('/contact-us',[HomeController::class, 'contactUs']);
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/product-detail',[HomeController::class, 'productDetail'])->name('productDetail');
Route::post('/send-contact-us-form',[HomeController::class, 'sendContactUs'])->name('sendContactUs');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add/new/portfolio', [App\Http\Controllers\PortfolioController::class, 'addPortfolio'])->name('addPortfolio');
Route::post('/add-new-portfolio', [App\Http\Controllers\PortfolioController::class, 'addNewPortfolio'])->name('addNewPortfolio');
