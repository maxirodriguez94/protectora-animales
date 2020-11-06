<?php


namespace App\Http\Actions\Animal;


use App\Connection;

class ListAnimalAdopcionAction
{
    public function __invoke()
    {
        $animalAdopcion = Connection::where('type','adopcion')->get();

        return response()->json($animalAdopcion);
    }
}
