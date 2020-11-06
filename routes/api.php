<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');

/*Animal */
Route::post('/animal','Animal\CreateAnimalAction');
Route::get('/animal/{id}/edit','Animal\EditAnimalAction');
Route::get('/animal/list/adopcion', 'Animal\ListAnimalAdopcionAction');

Route::post('/persona','Persona\CreatePersonaAction');

