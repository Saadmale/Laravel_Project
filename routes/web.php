<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EcommerceController;
use App\Http\Middleware\AuthMiddlware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Guest Routes
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

route::get('/shop/product', [EcommerceController::class,'shop'])->name('shop');
route::get('/about', [EcommerceController::class,'about'])->name('about');
route::get('/detail/product', [EcommerceController::class,'detail'])->name('productdetail');






//Authenticated Routes Groupes
route::group(['middleware' => 'check'], function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('/change/password', [EcommerceController::class,'changepassword'])->name('changepassword');
route::post('/update/password', [EcommerceController::class,'updatepassword'])->name('updatepassword');
route::get('/whishlist', [EcommerceController::class,'whishlist'])->name('whishlist');
route::get('/checkout', [EcommerceController::class,'checkout'])->name('check');
route::post('/checkcard', [EcommerceController::class,'checkcard'])->name('checkcard');

//1=> Product Routes
Route::get('/create',function(){
    return view('product.create');
});
route::post('/store/product', [EcommerceController::class,'store'])->name('store');
route::get('/show/product', [EcommerceController::class,'show'])->name('myorder');
route::get('/delete/product/{id}', [EcommerceController::class, 'delete'])->name('delete');
route::get('/edit/product/{id}', [EcommerceController::class, 'edit'])->name('edit');
route::post('/update/product/{id}', [EcommerceController::class, 'update'])->name('update');


});

