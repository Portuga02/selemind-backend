<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/teste', function () {
    return response()->json(['mensagem' => 'Chegou no laravel']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
