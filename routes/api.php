<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/{barang}', [BarangController::class,'show']);
Route::post('/barang', [BarangController::class,'store']);

