<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/new-user', [UserController::class, "new_user"]);
Route::post('/add-user', [UserController::class,"add_user"]);
Route::get('/list-user',[UserController::class,"list_user"]);
Route::get('/delete-user/{id}',[UserController::class,"delete_user"]);

