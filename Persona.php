<?php
class Persona 
{
 private $nombre;   

 /**
  * Get the value of nombre
  */
 public function getNombre()
 {
  return $this->nombre;
 }

 /**
  * Set the value of nombre
  */
 public function setNombre($nombre): self
 {
  $this->nombre = $nombre;

  return $this;
 }
}
    

   
?>