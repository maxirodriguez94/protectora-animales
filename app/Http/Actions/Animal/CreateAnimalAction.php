<?php
declare(strict_types=1);

namespace App\Http\Actions\Animal;

use App\Animal;
use Illuminate\Http\Request;

class CreateAnimalAction
{
    public function __invoke(Request $request)
    {
        $animal = new Animal();
        $animal->setNombre($request->nombre);
        $animal->setEdad((int) $request->edad);
        $animal->setTamanio($request->tamanio);
        $animal->setRaza($request->raza);
        $animal->setDescripcion($request->descripcion);
        $animal->setFoto($request->foto);

        $animal->save();

        return response()->json([
            'status' => 'Ok',
            'message' => 'Animal creado con exito',
        ]);
    }
}
