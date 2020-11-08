<?php

namespace App\Http\Actions\Persona;

use App\Persona;
use Illuminate\Http\Request;

class DeletePersonaAction
{
    public function __invoke(int $id)
    {
        Persona::findOrFail($id)->delete();

        return response()->json([
            'status' => 'Ok',
            'message' => 'Persona eliminada con exito',
        ]);
    }
}
