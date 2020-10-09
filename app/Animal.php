<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function getId()
    {
        return $this->id;
    }
    public function setNombre(string $nombre)
    {
       $this->nombre = $nombre;
    } 
   
    public function getNombre(): string
    {
        return $this->nombre;
    }
   
    public function setEdad(integer $edad)
    {
        $this->edad = $edad;
    }    
    public function getEdad(): int
    {
        return $this->edad;
    }
    public function setTamaño(string $tamaño)
    {
        $this->tamaño = $tamaño;
    }    
    public function getTamaño(): string
    {
        return $this->tamaño;
    }
    public function setRaza(string $raza)
    {
        $this->raza = $raza;
    }    
    public function getRaza(): string
    {
        return $this->raza;
    }
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }    
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function setFoto(string $foto)
    {
        $this->foto = $foto;
    }    
    public function getFoto(): string
    {
        return $this->foto;
    }
}

