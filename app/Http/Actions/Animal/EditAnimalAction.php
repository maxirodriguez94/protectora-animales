<?php


namespace App\Http\Actions\Animal;


use App\Animal;
use App\Connection;
use Illuminate\Http\Request;

class EditAnimalAction
{
    public function __invoke(int $id , Request $request)
    {

        $animal = Animal::findOrfail($id);
        $animal->setNombre($request->nombre);
        $animal->setEdad((int)$request->edad);
        $animal->setTamanio($request->tamanio);
        $animal->setRaza($request->raza);
        $animal->setDescripcion($request->descripcion);
        $animal->setFoto($request->foto);
        $animal->save();

        $connection = new Connection();
        $connection->setType($request->type);
        $connection->save();

        return response()->json([
            'status' => 'ok',
            'message' => 'animal editado con exito'
        ]);
    }
}
