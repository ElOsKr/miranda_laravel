<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomsController;

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

Route::get('/', [IndexController::class,'view']);

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth', 'verified'])->name('orders');

Route::get('/orderEdit', [OrderController::class, 'getOrder'])->middleware(['auth', 'verified'])->name('orderEdit');

Route::post('/contact',[ContactController::class,'contactCreate']);

Route::get('/rooms', [RoomsController::class,'view']);

Route::post('/rooms',[RoomsController::class, 'getAvailables']);

Route::get('/offers', [OffersController::class,'getOffersRooms']);

Route::post('/order', [OrderController::class, 'store']);

Route::put('/orderEdit', [OrderController::class, 'update'])->name('orders.update');

Route::get('/roomDetails/{id}', [RoomDetailsController::class,'getRoom']);

Route::post('/roomDetails/{id}', [RoomDetailsController::class,'checkAvailavility']);

Route::get('/orderCreate',[RoomsController::class,'getRooms'])->middleware(['auth', 'verified'])->name('orderCreate');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
