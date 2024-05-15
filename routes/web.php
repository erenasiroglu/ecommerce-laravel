<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontController;


// After adding the FrontController, we no longer needet it

// Route::get('/', function () {
//     return view(view: 'front.index');
// });

Route::get("/", [FrontController::class, "index"]);


