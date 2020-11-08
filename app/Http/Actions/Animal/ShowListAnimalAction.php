<?php

namespace App\Http\Actions\Animal;

use App\Animal;

class ShowListAnimalAction
{
    public function __invoke()
    {
        $animales = Animal::all();
        
        return response()->json($animales);
    }
}