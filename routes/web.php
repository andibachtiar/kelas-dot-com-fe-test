<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "index"]);

Route::get('/course/{category_id}', [HomeController::class, "getCourses"])->name("course");


