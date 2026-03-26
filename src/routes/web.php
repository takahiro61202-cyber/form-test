<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'index']);

Route::post('/confirm', [TestController::class, 'confirm']);

Route::post('/thanks', [TestController::class, 'thanks']);


Route::get('/admin', [TestController::class, 'admin']);

Route::get('/search', [TestController::class, 'search']);

Route::get('/reset', [TestController::class, 'reset']);

Route::get('/delete', [TestController::class, 'delete']);

Route::get('/register', [TestController::class, 'register']);

Route::get('/login', [TestController::class, 'login']);
Route::get('/logout', [TestController::class, 'logout']);
Route::get('/export', [TestController::class, 'export']);


