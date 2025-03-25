<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/about', [\App\Http\Controllers\MainController::class, 'about']);

Route::get('/review', [\App\Http\Controllers\MainController::class, 'review'])->name('review');

Route::post('/review/check', [\App\Http\Controllers\MainController::class, 'review_check']);

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id.'. Name: '.$name;
//});
