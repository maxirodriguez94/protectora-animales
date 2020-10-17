<?php


namespace App\Http\Actions\Persona;


use App\Persona;
use Illuminate\Http\Request;


class CreatePersonaAction
{
    public function __invoke(Request $request)
    {
        $persona = new Persona();
        $persona->setNombre($request->nombre);
        $persona->setDni($request->dni);
        $persona->setDireccion($request->direccion);
        $persona->setTelefono($request->telefono);
        $persona->setLocalidad($request->localidad) ;

        $persona->save();

        return response()->json([
            'status' => 'Ok',
            'message' => 'Persona creada con exito',
        ]);
    }
}
