<?php


namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatePersonaActionTest extends TestCase
{
    use RefreshDatabase;
    public function testOk()
    {
        $response = $this->json('POST', '/api/persona/create',
            [
                'nombre' => 'Maxi',
                'dni' => '31313133',
                'direccion' => 'libertad 1011',
                'telefono' => '15313131',
                'localidad' => 'Freyre'

            ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'Ok',
                'message' => 'Persona creada con exito',
            ]);
    }
}
