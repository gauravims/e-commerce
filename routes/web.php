<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Session;


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
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login',[UserController::class,'login']);

Route::get('/',[ProductController::class,'index']);

Route::get('detail/{id}',[ProductController::class,'detail']);

Route::get('search',[ProductController::class,'search']);

Route::post('detail/add_to_cart',[ProductController::class,'addToCart']);

Route::get('cartlist',[ProductController::class,'cartlist']);

Route::get('removecart{id}',[ProductController::class,'removeCart']);

Route::get('ordernow',[ProductController::class,'orderNow']);

Route::post('orderpace',[ProductController::class,'orderPlace']);

Route::get('myorders',[ProductController::class,'myOrders']);

Route::post('register',[UserController::class,'newRegister']);

Route::resource('admin', ListController::class);

Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');







