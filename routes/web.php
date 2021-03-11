<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
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


Route::get('room/{room}/create-reservation', [ReservationController::class, 'create' ])->name('reservation.create');

Route::post('/crete-reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('room/{id}', [FrontendController::class, 'showSingleRoom'])->name('room.single');

Route::resource('rooms', RoomController::class);

require __DIR__.'/auth.php';
