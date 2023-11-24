<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});


Route::get('/home',[MainController::class,'index'])->name('home');
Route::get('/about',[MainController::class,'about'])->name('home.about');
Route::get('/projects',[MainController::class,'showProjects'])->name('home.projects');
Route::get('/contact',[MainController::class,'contact'])->name('home.contact');
Route::post('/download',[MainController::class,'download'])->name('home.download');