<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni(int $dni)
    {
        $this->dni = $dni;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion)
    {
        $this->direccion = $direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono)
    {
        $this->telefono = $telefono;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad)
    {
        $this->localidad = $localidad;
    }
}
