<?php

use App\Http\Controllers\StartPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StartPageController::class, 'index']);
