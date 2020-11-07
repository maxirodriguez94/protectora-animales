<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');

Route::post('/animal','Animal\CreateAnimalAction');
Route::put('/animal/{id}/edit','Animal\EditAnimalAction');
Route::get('/animal/lista-encontrados','ShowListFoundAnimals');


Route::post('/persona','Persona\CreatePersonaAction');

