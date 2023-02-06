<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\E_commoreConreoller;
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
Route::get('/checkoutid/{id}',[E_commoreConreoller::class, "GetPhoneDataid"])->name("checkoutid");
Route::post('/getinvoice', [E_commoreConreoller::class, "getinvoice"])->name("getinvoice");

Route::get('/checkout', function () {
    return view('/checkout');
})->name("checkout");

Route::get('/', [E_commoreConreoller::class, "Welcome"]);

Route::get('/getinv', function () {
    return view('invoice');
});
Route::get("/getPhoneData", [E_commoreConreoller::class, "GetPhoneDatab"])->name('getPhoneData');//call the method GetPhoneDatab from the controll
Route::get('/test', function () {
    echo "test";
});
//Q4
Route::get('/phone', function () {
    return view("PhonePage");
})->name('PG');

//Q5
Route::get('/phonedetails', function () {
    return view('phonedetails');
})->name('storge');

//Q6
Route::get('/oldphone', function () {
    return view("old/oldphone");
})->name("oldphone");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
