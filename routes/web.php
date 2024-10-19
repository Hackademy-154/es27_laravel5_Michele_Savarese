<?php

use App\Http\Controllers\Bgg;
use App\Http\Controllers\pagina1;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage']) -> name('Home');

Route::get('/barzelletta', [pagina1::class, 'page1']) -> name('drwho');


Route::get('/i-nostri-giochi', [Bgg::class, 'bgg']) ->name('game');

Route::get('/dettaglio/studente/{id}', [bgg::class,'gamedetail'])->name('gamedetail');

//istruttori
Route::get('/i-docenti', [TeacherController::class,'teacherList']) -> name('teacherIndex');

Route::get('/dettaglio/socente/{id}',[TeacherController::class,'detail']) -> name('teacherDetail');

Route::get('/contattaci',[PublicController::class,'contactUs']) -> name('contact.us');

Route::post('/contattaci-sumbit',[PublicController::class,'contactUsSumbit']) -> name('contact.submit');

Route::post('/contattaci-sumbit-Admin',[PublicController::class,'contactUsAdminSumbit']) -> name('contactAdmin.submit');

//pokymans
Route::get('pokemon/detail/{name}',[PublicController::class, 'pokemonDetail'])->name('pokemon.detail');
