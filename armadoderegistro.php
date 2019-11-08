<?php
class armadoderegistro{
//perfil avatar
  public static function armarimagen($imagen){
    $nombre = $imagen["foto"]["nombre"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["foto"]["tmpnombre"];
    $retadestino = dirname(_DIR_);
    $rutadestino = $rutadestino."/fotos/";
    $nombreimagen = uniqid();
    $rutadestino = $rutadestino.".".$nombreimagen.".".$ext;
    move_uploaded ($archivoOrigen, $rutadestino);
    return $nombreimagen.".".$ext;
  }
// hash de contraseña
public static function armarusuario($datos,$imagen){
  $contrasenaHash = password_hash($datos["contrasena"],PASSWORD_DEFAULT);
   $usuario = new usuario($datos["nombre"], $datos["email"], $contrasenaHash, $imagen);
 return $usuario;
  }
}


 ?>
