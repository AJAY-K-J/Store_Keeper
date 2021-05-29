<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\storekeeper\StoreArrivalController;
use App\Http\Controllers\storekeeper\UserController;
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
    return view('Login');
});



Route::view('/d','storeKeeper.dashboard');
Route::get('/dd',[StoreArrivalController::class,'index']);
Route::post('/addarrivals',[StoreArrivalController::class,'store']);

Route::get('/adduser',[UserController::class,'index']);



/*Auth::routes('');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
