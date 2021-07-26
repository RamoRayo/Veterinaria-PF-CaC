<?php

 abstract class Mascota{ 
    private $nombre;
    private $edad;
    private $duenio;

    public function __construct($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public abstract function mostrarDatos();

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }


    public function getDuenio()
    {
        return $this->duenio;
    }

    public function setDuenio($duenio)
    {
        $this->duenio = $duenio;
    }



}