<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;

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
//     return view('welcome');
// });


route::get('/', function (){
    return view('index');
}); 
Auth::routes();



route::get('/menu', function (){
    return view('menu');
}); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::post('home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
Route::put('/home/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('home.update');
Route::delete('/home/{memorie}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.destroy');

