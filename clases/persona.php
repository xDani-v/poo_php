<?php

namespace clases;

class Persona
{
    private $nombre;
    private $edad;
    private $pais;



    public function __construct($nombre = null, $edad = null, $pais = null)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function setNombre($nombre)
    {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function mostrarInformacion()
    {
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

class Estudiante extends Persona
{
    public $carrera;

    public function __construct($nombre = null, $edad = null, $pais = null, $carrera = null)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }

    public function mostrarInformacion()
    {
        return $this->getNombre() . ' tiene ' . $this->getEdad() . ' años de edad y es de ' . $this->getPais() . ' y estudia ' . $this->carrera . '<br>';
    }
}
