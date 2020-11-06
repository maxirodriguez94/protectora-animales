<?php


namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateEditAnimalAction
{
    use RefreshDatabase;
    public function testOk()
    {
        $response = $this->json('POST', '/animal/{id}/update',
            [
                'id' => '1',
                'nombre' => 'pipo',
                'edad' => '21',
                'tamanio' => 'grande',
                'raza' => 'chiwawua',
                'descripcion' => 'negro',
                'foto' => 'google',

                'type' => 'encontrado'
            ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'Ok',
                'message' => 'Animal creado con exito',
            ]);
    }
}
