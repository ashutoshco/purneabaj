<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderitemController;
use App\Http\Controllers\PublicController;


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
//cate
Route:: prefix('admin')->group(function(){
Route:: get('/cate',[categoryController::class,"manageCategory"])->name("cat");
Route:: get('/showcat',[categoryController::class,"showcat"])->name("incategory");
Route:: post('/catstore',[categoryController::class,"catstore"])->name("catstore");
Route::get('/maanagecat',[categoryController:: class,"manageCategory"])->name('manage');

//Brand
Route:: get('/brand',[BrandController::class,"brandindex"])->name("brand");
Route:: get('/brandshow',[BrandController::class,"insertbrand"])->name("inbrand");
Route:: post('/store',[BrandController::class,"store"])->name("store");

//product
Route:: get('/pro',[ProductController::class,"home"])->name("showpage");
Route:: get('/viewpro',[ProductController::class,"viewinsert"])->name("showpage");
Route:: post('/storeproduct',[ProductController::class,"storepro"])->name("index");

});
Route:: get('/coupon',[CouponController::class,""])->name("coupan");
Route:: get('/order',[OrderController::class,""])->name("order");
Route:: get('/orderitem',[OrderitemController::class,""])->name("orderitem");
Route:: get('/payment',[paymentController::class,""])->name("payment");



Route::prefix('public')->group(function(){
Route::get("/home",[PublicController::class,"home"])->name('home');
Route::get("/viewpage/{id}",[PublicController::class,"viewpage"])->name('view');
Route::get("/cart",[PublicController::class,"cart"])->name('showcart');
});

require __DIR__.'/auth.php';
 Route:: get("/dashboard",[AdminController::class,"dashboard"])->name("dashboard");
 Route:: get("/",[AdminController::class,"index"])->name("dashboard");
 