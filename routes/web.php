<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

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


Route::get('import', [MyController::class, 'importView']);
Route::post('import', [MyController::class, 'import'])->name('import');







Route::get('exportView', [MyController::class,'exportView']);
Route::get('exportUsers', [MyController::class, 'exportUsers'])->name('exportUsers'); 
Route::get('exportProducts', [MyController::class, 'exportProducts'])->name('exportProducts');
Route::get('exportPersonal', [MyController::class, 'exportPersonal'])->name('exportPersonal');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
