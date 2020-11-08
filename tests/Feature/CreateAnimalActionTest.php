<?php


namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateAnimalActionTest extends TestCase
{
    use RefreshDatabase;
    public function testOk()
    {
        $response = $this->json('POST', '/api/animal/create',
            [
                'nombre' => 'pipo',
                'edad' => '21',
                'tamanio' => 'grande',
                'raza' => 'chiwawua',
                'descripcion' => 'negro',
                'foto' => 'google'
            ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'Ok',
                'message' => 'Animal creado con exito',
            ]);
    }

}
