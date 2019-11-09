<?php
/**get y set **/
class Usuario {
      private $nombre;
      private $email;
      private $contrasena;
      private $foto;

public function __construct($nombre, $email, $contrasena, $foto ){
  $this->nombre = $nombre;
  $this->email = $email;
  $this->contrasena = $contrasena;
  $this->foto = $foto;
}

 public function getNombre(){
  return $this->nombre;
}

public function setNombre($nombre){
  $this->nombre = $nombre;
  return $this;
}

 public function getEmail(){
   return $this;
 }
 
 public function setEmail($email){
  $this ->email =$email ;
  return $this;
}

public function getContrasena(){
  return $this->contrasena;
}

public function setcontrasena($contrasena){
  $this->contrasena = $contrasena;
}
public function getFoto(){
  return $this->foto;
}

public function setFoto(){
  $this->foto = $foto;
  return $foto;
}
}




 ?>
