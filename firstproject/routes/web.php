<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\ContactController;

Route::get('/home', [AnimalsController::class, 'home'])->name('home');
Route::get('/lion', [AnimalsController::class, 'lion'])->name('lion');
Route::get('/rhino', [AnimalsController::class, 'rhino'])->name('rhino');
Route::get('/antelope', [AnimalsController::class, 'antelope'])->name('antelope');
Route::get('/tiger', [AnimalsController::class, 'tiger'])->name('tiger');
Route::get('/login', [AnimalsController::class, 'login'])->name('login');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



