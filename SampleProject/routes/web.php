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


// コントローラーを使ってのviewの表示がうまく行かなかったので、コントローラー使ってませんwarnin
// Route::get('/access', function () {
//     return view('access');
// });

//Route::get('/access',[BeginnerController::class,'access']);

// Route::get('access','BeginnerController@index');

Route::get('/contact',[BeginnerController::class,'contact']);

Route::post('/contact',[BeginnerController::class,'store'])->name('store');
