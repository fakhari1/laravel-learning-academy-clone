<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\CourseController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::resource('articles', ArticleController::class)->names('admin.articles');
    Route::resource('courses', CourseController::class)->names('admin.courses');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
