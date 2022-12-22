<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class , 'Home']);
Route::post('insert',[StudentController::class , 'OnInsert']);
Route::get('/add',[HomeController::class, 'index']);

// view
Route::get('/view/{id}',[StudentController::class,'OnDetails']);

Route::get('/edit',[StudentController::class, 'Edit']);

// Delete Route

Route::get('/delete/{id}',[StudentController::class,"Destroy"]);
