<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\storekeeper\UserController;
use App\Http\Controllers\storekeeper\RoleController;
use App\Http\Controllers\storekeeper\DesignationController;
use App\Http\Controllers\storekeeper\CategoryController;
use App\Http\Controllers\storekeeper\ItemController;
use App\Http\Controllers\storekeeper\SectionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/adduser',[UserController::class,'store']);

Route::get('/adduser',[UserController::class,'userslist']);