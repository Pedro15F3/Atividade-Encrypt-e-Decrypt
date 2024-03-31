<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
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

Route::get('/exemplo', [AulaController::class, 'index']);

Route::get('/contato', [ContactController::class, 'index']);

Route::post('/contato/store', [ContactController::class, 'store'])->name('contact.store');

Route::put('/contato/update', [ContactController::class, 'update'])->name('contact.update');

Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/contato/decripty', [ContactController::class, 'decripty']);
