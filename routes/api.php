<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');


Route::get('/animal/list/adopcion', 'Animal\ListAnimalAdopcionAction');


Route::post('/persona','Persona\CreatePersonaAction');
