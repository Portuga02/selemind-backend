<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/usuarios', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/administradores', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/cadastros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/outros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/outros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/outros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/outros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});
Route::get('/outros', function () {
    return response()->json(['status' => 'Laravel conectado com sucesso!']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
