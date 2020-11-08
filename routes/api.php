<?php

use Illuminate\Support\Facades\Route;

/*Animal */
Route::post('/animal/create','Animal\CreateAnimalAction');
Route::get('/animal/list/adopcion', 'Animal\ListAnimalAdopcionAction');
Route::put('/animal/{id}/edit','Animal\EditAnimalAction');
Route::get('/animal/delete/{id}','Animal\DeleteAnimalAction');
Route::get('/animal/list/encontrados','Animal\ShowListFoundAnimalsAction');
Route::get('/animal/list','Animal\ShowListAnimalAction');

/*Persona*/
Route::post('/persona/create','Persona\CreatePersonaAction');
Route::delete('/persona/delete/{id}','Persona\DeletePersonaAction');
Route::put('/persona/{id}/edit','Persona\EditPersonaAction');
Route::get('/persona/list','Persona\ShowListPersonAction');
