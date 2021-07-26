<?php
include_once ("Cliente.php");
include_once ("Mascota.php");
include_once ("Perro.php");
include_once ("Gato.php");


//Construccion de un objeto (INSTANCIANDO UN OBJETO) La instancia es la unidad que deriva de la creaacuion de un objeto
$cliente1 = new Cliente();
$mascota1 = new Perro("Fifi", 5);
$mascota2 = new Gato("Coco",2);

//$mascota1->setNombre("Firulais");
//$mascota2->setNombre("Coco");

$cliente1->setNombre("Gabriela");
$cliente1->setDni(1231234);

var_dump($cliente1->getNombre());echo "<br>";
var_dump($cliente1->getDni());echo "<br>";

$cliente1->agregarMascota($mascota1);
$cliente1->agregarMascota($mascota2);
echo "<pre>";
var_dump($cliente1->getMascotas());echo "<br>";
echo "</pre>";

/*$cliente1->quitarMascota($mascota2);

echo "<pre>";
var_dump($cliente1->getMascotas());echo "<br>";
echo "</pre>";*/

//var_dump($cliente1);echo "<br>";
//var_dump($cliente2);