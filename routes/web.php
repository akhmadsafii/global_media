<?php

use App\Http\Controllers\DiagramController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PalindromController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\TreeviewController;
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

Route::prefix('diagrams')->name('diagram.')->group(function () {
    Route::get('/', [DiagramController::class, 'index'])->name('index');
    // Route::post('check', [PalindromController::class, 'checkPalindrome'])->name('check');
});

Route::prefix('palindroms')->name('palindrom.')->group(function () {
    Route::get('/', [PalindromController::class, 'index'])->name('index');
    Route::post('check', [PalindromController::class, 'checkPalindrome'])->name('check');
});
Route::prefix('treeviews')->name('treeview.')->group(function () {
    Route::get('/', [TreeviewController::class, 'index'])->name('index');
});
Route::prefix('shapes')->name('shape.')->group(function () {
    Route::get('/', [ShapeController::class, 'index'])->name('index');
    Route::post('calculate', [ShapeController::class, 'calculate'])->name('calculate');
});

Route::prefix('numbers')->name('number.')->group(function () {
    Route::get('/', [NumberController::class, 'index'])->name('index');
    Route::post('find-missing', [NumberController::class, 'findMissingNumbers'])->name('find_missing');
});

Route::prefix('posts')->name('post.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('get-data', [PostController::class, 'getData'])->name('get_data');
    Route::post('store', [PostController::class, 'store'])->name('store');
    Route::get('edit', [PostController::class, 'show'])->name('edit');
    Route::post('update', [PostController::class, 'update'])->name('update');
    Route::get('delete', [PostController::class, 'destroy'])->name('delete');
});
