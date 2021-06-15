<?php

use App\Http\Controllers\AuthenticarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('authenticar');
// });

Route::get('/',[AuthenticarController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'login'], function(){
    Route::get('/', [AuthenticarController::class,'login']);
    // Route::post('/ingresar', 'LoginController@ingresar');
    // Route::get('salir', 'LoginController@salir');
    // Route::post('upload', 'LoginController@upload');
});

Route::get('inicio',[AuthenticarController::class,'principal'])->middleware('auth');
