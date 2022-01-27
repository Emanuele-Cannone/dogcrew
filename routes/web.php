<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\ViewSectionController;
use App\Models\Section;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/atWorking', function () {
    return view('atWorking');
});

Route::get('/guest/sections/{section}', [ViewSectionController::class, 'index'])->name('sections');
Route::get('/guest/sections/post/{post}', [ViewSectionController::class, 'show']);


Auth::routes();

Route::prefix('user')
->middleware('auth')
->group(function () {

    Route::resource('/post', PostController::class);
});



// FAI IL CONTROLLER DEL BLOG PER VEDERE LA PAGINA DI INDEX