<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home.index');

// === page lukcy number route === //
Route::get('/lukynumberpage', function () {
    return view('pages.LukcyNumber_page');
})->name('luky.index');




// === page about route === //
Route::get('/about', function () {
    return view('pages.aboutPage');
})->name('about.index');



// === page howtoplay route === //
Route::get('/howtoplay', function () {
    return view('pages.howtoplay');
})->name('howtoplay.index');


// === page Previous Result route === //
Route::get('/previousresult', function () {
    return view('pages.PreviousResult');
})->name('previousresult.index');

// === page Next route === //
Route::get('/next', function () {
    return view('pages.nextPage');
})->name('next.index');



// === page statistic route === //
Route::get('/statistic', function () {
    return view('pages.Statistic_Sydney');
})->name('statistic.index');


// === page popup route === //
Route::get('/popup', function () {
    return view('pages.popup');
})->name('popup.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
