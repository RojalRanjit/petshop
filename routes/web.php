<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
// ->middleware(['auth']);
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/login', [HomeController::class, 'login'])->name('login');
