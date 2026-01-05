<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix("/teacher") -> controller(TeacherController::class) -> group(function(){
    Route::get("/all","findAll");
});

Route::prefix("/author") -> controller(AuthorController::class) -> group(function(){
    Route::get('/all',"findAll");
    Route::get('/{id}',"find");
});

Route::prefix("/book") -> controller(BookController::class) -> group(function(){
    Route::get('/{id}',"find");
});
