<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\GameController;
// use App\Livewire\Welcome;

Route::get("/", fn() => view("welcome"))->name("welcome");
Route::get("/about", fn() => view("about"))->name("about");
Route::get("/contact", fn() => view("contact"))->name("contact");
Route::get("/api", fn() => view("api"))->name("api");

// Route::get("/app/{id}", [GameController::class, "search"]);
