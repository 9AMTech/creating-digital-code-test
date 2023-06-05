<?php

use App\Http\Controllers\PhonebookController;
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

Route::get('/', [PhonebookController::class, 'index']);
Route::get('/add', [PhonebookController::class, 'add']);
Route::post('/insert', [PhonebookController::class, 'insert']);
Route::get('/edit/{id}', [PhonebookController::class, 'edit']);
Route::post('/update/{id}', [PhonebookController::class, 'update']);
Route::post('/delete/{id}', [PhonebookController::class, 'delete']);
