<?php

namespace App\Http\Actions\Animal;

use App\Connection;

class ShowListFoundAnimalsAction
{
    public function __invoke()
    {
        $listaEncontrados = Connection::Where('type','encontrado');

        return response()->json($listaEncontrados);
    }
}
