<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-contact', [ContactController::class, 'create'])->name('add.contact');
Route::post('/add-contact', [ContactController::class, 'store']);
Route::get('/list-contacts', [ContactController::class, 'index'])->name('list.contacts');
Route::post('/delete-contact', [ContactController::class, 'destroy'])->name('delete.contact');
