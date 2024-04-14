<?php

namespace model;

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años y es de ' . $this->pais;
    }
}
