<?php
//Llamamos a clase persona
include ('Persona.php');

//Creamos objeto de tipo persona
$nombre=new Persona();

//Seteamos nombre de dicho objeto (añadir parámetro)
$nombre->setNombre('Nuria');

//Imprimimos por pantalla utilizando getter
echo $nombre->getNombre();

echo '<br>';

$nombre2=new Persona();

$nombre2->setNombre('Alejandro');

echo $nombre2->getNombre();

?>