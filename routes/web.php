<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\storekeeper\StoreArrivalController;
use App\Http\Controllers\storekeeper\UserController;
use App\Http\Controllers\storekeeper\RoleController;
use App\Http\Controllers\storekeeper\DesignationController;
use App\Http\Controllers\storekeeper\CategoryController;
use App\Http\Controllers\storekeeper\ItemController;
use App\Http\Controllers\storekeeper\SectionController;
use App\Http\Controllers\sections\SectionPageController;
use App\Http\Controllers\sections\SectionResponseController;
use App\Http\Controllers\storekeeper\ConfirmedItemsController;
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
    return view('Auth.Login');
});


Route::post('/login',[UserAuthController::class,'usercheck']);
Route::get('/logout',[UserAuthController::class,'userlogout']);


Route::get('/storedashboard',[StoreArrivalController::class,'index']);

Route::get('/confirmedIitemPage',[ConfirmedItemsController::class,'index']);
Route::get('/confirmedDetails',[ConfirmedItemsController::class,'confirmedItems']);

Route::get('/adduser',[UserController::class,'index']);

Route::get('/addroles',[RoleController::class,'index']);

Route::get('/adddesignations',[DesignationController::class,'index']);

Route::get('/addcategories',[CategoryController::class,'index']);

Route::get('/additems',[ItemController::class,'index']);

Route::get('/addsections',[SectionController::class,'index']);





Route::get('/sectiondashboard',[SectionPageController::class,'index']);
Route::get('/section-details',[SectionPageController::class,'sectionItem']);
Route::get('/sectionlogout',[SectionPageController::class,'logout']);


Route::post('/section-confirm/{id}',[SectionResponseController::class,'confirm']);
Route::post('/section-reject/{id}',[SectionResponseController::class,'reject']);








//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
