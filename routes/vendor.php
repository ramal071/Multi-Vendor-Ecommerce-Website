<?php

use App\Http\Controllers\backend\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[VendorController::class, 'dashboard'])->name('dashboard');

