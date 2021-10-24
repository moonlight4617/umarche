<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;

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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/component_test1', [ComponentTestController::class, 'show1']);
Route::get('/component_test2', [ComponentTestController::class, 'show2']);

require __DIR__ . '/auth.php';
