<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [InvitationController::class, 'home'])->name('home');

Route::get('/{id}', [InvitationController::class, 'home']);

// Маршрут для обработки отправленной формы
Route::post('/rsvp', [InvitationController::class, 'rsvp'])->name('rsvp');

Route::get('/health', function () {
    return response('OK', 200);
});
