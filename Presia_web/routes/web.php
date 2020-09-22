<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeginnerController;

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


// Route::get('/access', function () {
//     return view('access');
// });

Route::get('/access',[BeginnerController::class,'access']);

// Route::get('access','BeginnerController@index');

Route::get('/contact',[BeginnerController::class,'get']);

Route::post('/result',[BeginnerController::class,'post']);
