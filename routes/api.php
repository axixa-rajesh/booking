<?php

use App\Http\Controllers\api\FirmController;
use Illuminate\Support\Facades\Route;
Route::resource('/firms',FirmController::class);