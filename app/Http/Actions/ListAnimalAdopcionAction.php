<?php


namespace App\Http\Actions;


use App\Connection;

class ListAnimalAdopcionAction
{
    public function __invoke()
    {
        $animalAdopcion = Connection::where('type','adopcion')->get();

        return response()->json($animalAdopcion);
    }
}
