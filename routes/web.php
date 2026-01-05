<?php

use App\Http\Controllers\MailController;
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
    Route::get("/{teacher:name}","find");
});

Route::post("/mail/send",[MailController::class,"send"]);

Route::view("/mail_sender","mail_sender");
