<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/teste', function () {
    return response()->json(['mensagem' => 'API funcionando!']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
