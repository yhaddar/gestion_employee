<?php

use Illuminate\Support\Facades\Route;

Route::resource("/employee", \App\Http\Controllers\EmployeeController::class);
Route::resource("/formation", \App\Http\Controllers\FormationController::class);
Route::controller(\App\Http\Controllers\ContactController::class)->group(function(){
    Route::get("/contact", "index")->name("contact.index");
    Route::post("/contact", "store")->name("contact.store");
});