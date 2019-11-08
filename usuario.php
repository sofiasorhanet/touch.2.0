<?php
/**get y set **/
class usuario {
    private $nombre;
      private $email;
    private $contrasena;
      private $foto;

public function _construct($nombre, $email, $contrasena, $foto ){
  $this->nombre = $nombre;
  $this->email = $email;
  $this->contrasena = $contrasena;
  $this->foto = $foto;
}

 public function getnombre(){
  return $this->nombre;
}
public function setnombre($nombre){
  $this->nombre = $nombre;
  return $this;
}

 public function getemail(){
   return $this;
 }
 public function setemail($email){
  $this ->email =$email ;
  return $this;
}

public function getfoto(){
  return $this->foto;
}
public function setfoto(){
  $this->foto = $foto;
  return $foto;
}
}




 ?>
