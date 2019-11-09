<? php
class ArmarRegistro {
// armado de usuario
   static public function  armarUsuario ( $datos, $imagen ) { 
       $contrasenaHash = password_hash($datos["contrasena"], PASSWORD_DEFAULT);
       $usuario = new Usuario($datos["nombre"],$datos["email"]),$contrasenaHash, $imagen);
       return $usuario;
  }

//armar imagen 
  static public function armarImagen($imagen){
    $nombre = $_FILES["foto"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $_FILES["foto"]["tmp_name"];
    $rutaDestino = dirname(__DIR__);
    $rutaDestino = $rutaDestino."/fotos/";
    $nombreImg = uniqid();
    $rutaDestino = $rutaDestino." ".$nombreImg." ".$ext;
    move_uploaded_file ($archivoOrigen, $rutaDestino);
    return $nombreImg." ".$ext;

  }
}
 ?> 