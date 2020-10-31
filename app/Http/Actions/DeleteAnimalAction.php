<?php


namespace App\Http\Actions;

use App\Animal;

class DeleteAnimalAction
{
    public function __invoke(int $id)
    {
        Animal::findOrFail($id)->delete();

        return response()->json([
            "status" => "Ok",
            "message" => "El animal se elimino correctamente"
        ]);
    }
}
