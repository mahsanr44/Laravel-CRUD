<?php

use App\Http\Controllers\RegistrationController;
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
Route::get('/register',[RegistrationController::class,'form']);
Route::post('/register',[RegistrationController::class,'add']);
Route::get("/view",[RegistrationController::class,'show']);
Route::get('view/delete/{id}',[RegistrationController::class,'delete']);
Route::get('update/{id}',[RegistrationController::class,'edit']);
Route::post("update/{id}",[RegistrationController::class,'update']);
