<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');

/*Animal */
Route::post('/animal','Animal\CreateAnimalAction');
Route::get('/animal/{id}/edit','Animal\EditAnimalAction');


Route::post('/persona','Persona\CreatePersonaAction');

