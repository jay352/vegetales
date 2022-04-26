<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

//google login
Route::get('google', [App\Http\Controllers\GoogleLogin::class, 'redirectToGoogle']);

    Route::get('Callback', [App\Http\Controllers\GoogleLogin::class, 'googleCallback']);


//admin,user
 Route::group(['middleware' => ['auth','isAdmin']], function () {

   Route::get('/home', function () {
      return view('admin.home');
   });

   //store product

 Route::post('/product', [App\Http\Controllers\HomeController::class, 'store'])->name('product');
});


//view
Route::get('/pro-manage', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'display']);



//delete
Route::get('delete-pro/{id}', [App\Http\Controllers\ProductmanageController::class, 'destroy']);

Route::delete('delete-pro/{id}', [App\Http\Controllers\ProductmanageController::class, 'destroy']);


//edit
Route::get('edit-pro/{id}', [App\Http\Controllers\ProductmanageController::class, 'edit']);
Route::put('update-pro/{id}',  [App\Http\Controllers\ProductmanageController::class,'update'])->name('update-pro/{id}');

//buy product
Route::get('/{prod_name}', [App\Http\Controllers\ProductInvoiceController::class, 'view']);
Route::get('/{prod_name}', [App\Http\Controllers\ProductInvoiceController::class, 'view']);

Route::get('phone-auth', [PhoneAuthController::class, 'index']);

//checkout product
Route::get('{prod_name}/checkout', [App\Http\Controllers\CheckoutController::class, 'show']);
Route::post('update-price', [App\Http\Controllers\ProductmanageController::class,'update-pri']);