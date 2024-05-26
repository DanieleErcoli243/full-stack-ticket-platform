<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// rotta per la index
Route::get('/tickets', [TicketController::class, 'index'])->middleware('auth')->name('tickets.index');
// rotta per la show
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->middleware('auth')->name('tickets.show');
// rotte per la creazione
Route::get('/tickets/create', [TicketController::class, 'create'])->middleware('auth')->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->middleware('auth')->name('tickets.store');
// rotte per la modifica
Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])->middleware('auth')->name('tickets.edit');

Route::patch('/tickets/{ticket}', [TicketController::class, 'update'])->middleware('auth')->name('tickets.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


