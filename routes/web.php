<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// Show add contact form
Route::get('/add-contact', [ContactController::class, 'create'])->name('add.contact');

// Handle add contact form submission
Route::post('/add-contact', [ContactController::class, 'store'])->name('store.contact');

// List contacts route
Route::get('/list-contacts', [ContactController::class, 'index'])->name('list.contacts');

// Show delete contacts page
Route::get('/delete-contacts', [ContactController::class, 'showDeleteContacts'])->name('show.delete.contacts');

// Handle bulk delete
Route::post('/delete-contacts', [ContactController::class, 'deleteMultipleContacts'])->name('delete.contacts');

