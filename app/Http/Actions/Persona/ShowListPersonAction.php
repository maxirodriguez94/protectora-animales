<?php

namespace App\Http\Actions\Persona;

use App\Persona;

class ShowListPersonAction
{
    public function __invoke()
    {
        $persona = Persona::all();
        
        return response()->json($persona);
    }
}

