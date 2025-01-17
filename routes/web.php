<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbMClientController;
use App\Http\Controllers\TbMfClientController;
use App\Http\Controllers\TbMProjectController;
use App\Http\Controllers\TbMfProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.layout.main');
});
Route::get('/home', function () {
    return view('home');
});
Route::resource('dashboard', DashboardController::class);
Route::resource('client', TbMClientController::class);
Route::resource('clientfrontend', TbMfClientController::class);
Route::resource('project', TbMProjectController::class);
Route::get('/projects/search', [ProjectController::class, 'searchByProjectName'])->name('projects.searchByProjectName');
Route::resource('projectfrontend', TbMfProjectController::class);

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class,'logout']);
Route::post('/login', [LoginController::class,'authenticate']);