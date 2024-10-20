<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//! file di routing per le api
//! tutte le route api hanno all'inizio dell'url api
// /moves/index == /api/moves/index

Route::get('/moves/index', function () {
$moves=http::Get('https://pokeapi.co/api/v2/move/')->json();
// dd($moves);
return response($moves);


});


Route::get('/moves/detail/{name}', function ($name)  {

    $moves=http::Get('https://pokeapi.co/api/v2/move/'. $name)->json();
    dd($moves);
});
