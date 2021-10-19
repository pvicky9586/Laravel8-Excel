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


Route::get('importView', [MyController::class, 'importView']);
Route::post('import', [MyController::class, 'import'])->name('import');


Route::get('exportView', [MyController::class,'exportView']);
Route::get('export', [MyController::class, 'export'])->name('export');

