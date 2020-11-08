<?php

use Illuminate\Support\Facades\Route;

/*Animal */
Route::post('/animal','Animal\CreateAnimalAction');
Route::get('/animal/list/adopcion', 'Animal\ListAnimalAdopcionAction');
Route::put('/animal/{id}/edit','Animal\EditAnimalAction');
Route::get('/animal/delete','Animal\DeleteAnimalAction');
Route::get('/animal/list/encontrados','Animal\ShowListFoundAnimalsAction');
Route::get('/animal','Animal\ShowListAnimalAction');


Route::post('/persona/create','Persona\CreatePersonaAction');
Route::delete('/persona/delete/{id}','Persona\DeletePersonaAction');
Route::put('/persona/{id}/edit','Persona\EditPersonaAction');



