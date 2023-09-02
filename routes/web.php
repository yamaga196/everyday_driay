<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class, 'index'])->name('item.index');
Route::get('/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/store', [ItemController::class, 'store'])->name('item.store');
Route::get('/detail/{id}', [ItemController::class, 'detail'])->name('item.detail');

// Route::get('/', function () {
//     return view('welcome');
// });
