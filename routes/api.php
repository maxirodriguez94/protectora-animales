<?php

use Illuminate\Support\Facades\Route;

/*Animal */
Route::post('/animal','Animal\CreateAnimalAction');
Route::get('/animal/list/adopcion', 'Animal\ListAnimalAdopcionAction');

Route::post('/persona','Persona\CreatePersonaAction');
