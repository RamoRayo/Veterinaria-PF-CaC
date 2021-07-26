<?php
class Cliente{ 
    private $nombre; 
    private $dni; 
    private $mascotas = [];

    public function agregarMascota($mascota){
        $this->mascotas[] = $mascota;
    }

    public function getMascotas(){
        return $this->mascotas;
    }

    public function quitarMascota($mascota){
       $posicion = array_search($mascota,$this->mascotas);
       unset($this->mascotas[$posicion]);
    }

    public function setNombre($nombre){ 
        $this->nombre = $nombre;
    }

    public function setDni($dni){
        $this->dni = $dni;
    }


    public function getNombre(){
        return $this->nombre;
    }

    public function getDni(){
        return $this->dni;
    }
}
?>