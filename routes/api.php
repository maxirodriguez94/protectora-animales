<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'ShowUserListAction@run');


Route::get('Animal/delete','DeleteAnimalAction');


