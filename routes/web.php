<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Members
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
Route::get('/members/{id}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/members/{id}', [MemberController::class, 'destroy'])->name('members.destroy');
// Trainers
Route::get('/trainers', [TrainerController::class, 'index']);
Route::get('/trainers/create', [TrainerController::class, 'create']);
Route::post('/trainers', [TrainerController::class, 'store']);
Route::get('/trainers/{id}/edit', [TrainerController::class, 'edit']);
Route::put('/trainers/{id}', [TrainerController::class, 'update']);
Route::delete('/trainers/{id}', [TrainerController::class, 'destroy']);