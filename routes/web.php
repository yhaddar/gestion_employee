<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource("/employee", \App\Http\Controllers\EmployeeController::class);
Route::resource("/formation", \App\Http\Controllers\FormationController::class);
Route::controller(\App\Http\Controllers\ContactController::class)->group(function(){
    Route::get("/contact", "index")->name("contact.index");
    Route::post("/contact", "store")->name("contact.store");
});
