<?php

use App\Http\Controllers\Administrator\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('administrator', [HomeController::class, 'index']);