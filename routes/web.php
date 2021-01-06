<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/create', [AdminController::class, 'create']);
Route::get('/admin/delete', [AdminController::class, 'delete']);
Route::delete('/admin/{id}/delete', [AdminController::class, 'destroy']);
Route::get('/admin/{id}/edit', [AdminController::class, 'edit']);
Route::put('/admin/{id}/edit', [AdminController::class, 'update']);

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return redirect("/");
});