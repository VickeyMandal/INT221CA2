<?php

use App\Http\Controllers\Question1;
use App\Http\Controllers\Question2;
use App\Http\Controllers\Question3;
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


//Question 1

Route::get('question1',[Question1::class,'loadForm']);
Route::post('question1',[Question1::class,'add']);


//Question 2

Route::get('question2',[Question2::class,'uploadForm']);
Route::post('question2',[Question2::class,'uploadFile'])->name('upload.uploadFile');


//Question 3

Route::get('question3',[Question3::class,'emailForm']);
Route::post('question3',[Question3::class,'sendEmail']);