<?php

namespace App\Http\Actions\Persona;

use App\Persona;
use Illuminate\Http\Request;


class EditPersonaAction
{
    public function __invoke(Request $request, int $id)
    {
        $persona = Persona::findOrFail($id);

        if($persona === null)
        {
            return response()->json([
                'status' => 'Fail',
                'message' => 'La persona no se ha encontrado',
            ]);
        }

        $persona->setNombre($request->nombre);
        $persona->setDni((int)$request->dni);
        $persona->setTelefono($request->telefono);
        $persona->setDireccion($request->direccion);
        $persona->setLocalidad($request->localidad);

        $persona->save();

        return response()->json([
            'status' => 'Ok',
            'message' => 'Persona editada con exito',
        ]);
    }
}
