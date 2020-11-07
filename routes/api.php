<?php

use Illuminate\Support\Facades\Route;

Route::post('/animal','Animal\CreateAnimalAction');
Route::put('/animal/{id}/edit','Animal\EditAnimalAction');
Route::get('/animal/delete','Animal\DeleteAnimalAction');
Route::get('/animal/list/encontrados','Animal\ShowListFoundAnimalsAction');

Route::post('/persona','Persona\CreatePersonaAction');
Route::put('/persona/{id}/edit', 'Persona\EditPersonaAction');



