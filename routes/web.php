<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\KeluhanController; // ← TAMBAH INI

Route::resource('data-masyarakat', MasyarakatController::class);
Route::resource('keluhan', KeluhanController::class);