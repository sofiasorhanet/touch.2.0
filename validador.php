<?php
/**validar los datos del usuario y errores de formulario **/
class ClassName {
    function __validarrRegistro($datos){
    $errores =[];
    if ($datos) {
      if (strlen($datos["nombre"])==0) {
        $errores[] "el campo nombre se encuentra vacio";
        }
    if ($datos) {
     if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      $errores[] "ste mail tiene un formato incorrecto";
          }
    if ($datos) {
      if (strlen($datos["contrasena"]);<=6) {
      $errores[] "la contrasena tiene menos de 6 caracteres";
              }
    if ($datos) {
      if (strlen($datos["contrasena"] != $datos["recontrasena"]) {
        $errores[] "la contrasena es invalida";
        }

    //en esta seccion utilizamos la variable FILES //
if ($_FILE != null) {
  if ($_FILE["foto"]["error"]!=0)´{
    $errores["foto"] = "no recibe la imagen ";
  }
$nombreimagen = $_FILE["foto"]["nombre"];
$EXT = pathinfo($nombreimagen, PATHINFO_EXTENSION);
if ($ext != "jpg" && $ext !="jpeg" && $ext != "jng"){
  $errores["foto"] = "la extension del archivo es incorrecto";
   }
  }
}

  return $errores;
} // funcion de buscar por mail, devulve informacion del usurio//
 public function validarLogin($datos){
   $errores =[];
   $usuario = buscarporemail($datos["email"]);
 }
 if($usuario == null ){
   $errores[] = "el Usuario no se encuentra registrado";
 }

  //password//
  if (password_verify($datos["contrasena"], $usuario["contrasena"]) == false){
    $errores[] = "la contrasena es incorrecta";
  }
    return $errores;
  }  //retorna los errores//

  public function validarcontrasena($datos, $usuario){
    if(password_verify($datos["contrasena"], $usuario["contrasena"]) ==false){
    $errores[] = "la contrasena es incorrecta";
    }
    return $errores;
  }
  }

 ?>
