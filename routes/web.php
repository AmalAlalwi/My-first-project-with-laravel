<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoicController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\ShoppingCartController;
use App\Models\User;
use App\Mail\Rest;
use App\Mail\Address;
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

    return view('user.index');
});



Route::get('الصفحة الرئيسية', function(){return view('user.index');})->name('index');
Route::get('حول المتجر', function(){return view('user.about');})->name('about');



Route::resource('product', ProductController::class);
Route::resource('user', UserController::class);
Route::resource('productCart', ProductCartController::class)->middleware('auth');
Route::get('productCart/create',[ProductCartController::class,'create'])->name('cart')->middleware('auth');
Route::get('ShoppingCart/{id}',[ShoppingCartController::class,'store_cart'])->name('store');
Route::get('invoice',[InvoicController::class,'index'])->name('invoice');
Route::post('/filter', [ProductController::class, 'filter'])->name('filter');
Route::get('statistic',[CartController::class,'show'])->name('static');
Route::get('forget',function(){
    return view('user.forget_pas');
})->name('forgetpass');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/sendmail', function (Request $request) {
    $request->validate([
        'email' => 'required|email|exists:users,email', // تحقق من وجود البريد في قاعدة البيانات
    ]);
    $email=$request->email;
    Mail::to($email)->send(new Rest());

    return back()->with('success', 'تم إرسال رابط إعادة تعيين كلمة المرور إلى بريدك الإلكتروني.');
})->name('sendmail');

Route::get('reset',function(){return view('auth.passwords.reset');});
