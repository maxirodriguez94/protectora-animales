<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');

Route::post('/animal','Animal\CreateAnimalAction');

Route::post('/persona','Persona\CreatePersonaAction');
