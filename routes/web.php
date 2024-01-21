<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});





Route::get('/testimonial',[App\Http\Controllers\ViewsController::class, 'testimonials']);

Route::get('/detail',[App\Http\Controllers\ViewsController::class, 'details']);
Route::get('/service',[App\Http\Controllers\ViewsController::class, 'services']);
Route::get('/team',[App\Http\Controllers\ViewsController::class, 'teams']);
Route::get('/term',[App\Http\Controllers\ViewsController::class, 'terms']);
Route::get('/policy',[App\Http\Controllers\ViewsController::class, 'policys']);
Route::get('/contact',[App\Http\Controllers\ViewsController::class, 'contacts']);
Route::get('/blog',[App\Http\Controllers\ViewsController::class, 'blogs']);
Route::get('/about',[App\Http\Controllers\ViewsController::class, 'abouts']);
Route::get('/manager',[App\Http\Controllers\ViewsController::class,'managers']);