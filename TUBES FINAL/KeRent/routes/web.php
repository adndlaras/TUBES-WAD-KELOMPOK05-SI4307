<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function() {
//     return view('login');
// });


Route::resource('product', ProductController::class);
Route::resource('transaction', TransactionController::class);

Route::get('/penyewaan', function() {
    return view('penyewaan');
});

Route::get('/booking', function(){
    return view('booking');
});

Route::get('/pembayaran', function(){
    return view('pembayaran');
});

Route::get('/checkout', function() {
    return view('checkout');
});

Route::get('/admin/motor', function(){
    return view('admin.index');
});

Route::get('/admin/edit', function(){
    return view('admin.edit');
});

Route::get('/about', function() {
    return view('about');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
