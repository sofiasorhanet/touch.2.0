<?php
/**validar los datos del usuario y errores de formulario **/

//vale mira la clase validador que hizo pio  la comente abajo

class ClassName {
    function __validarrRegistro($datos){
    
    $errores =[];
      if ($datos) {
        if (strlen($datos["nombre"])==0) {
           $errores[] "El campo nombre se encuentra vacio";
        }

        //aca no entiendo porque haces if ($datos) abris llaves y haces otro if)
        if ($datos) {
        if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
           $errores[] "Este mail tiene un formato incorrecto";
        }
        if ($datos) {
        if (strlen($datos["contrasena"]);<=6) {
           $errores[] "La contraseña tiene menos de 6 caracteres";
              }
        if ($datos) {
        if (strlen($datos["contrasena"] != $datos["recontrasena"]) {
           $errores[] "La contrasena es invalida";
        }

    //en esta seccion utilizamos la variable FILES //
        //controla que la foto esta bien subida 
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
}

 // funcion de buscar por mail, devulve informacion del usuario//
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
      } 
   //retorna los errores//

  public function validarcontrasena($datos, $usuario){
          if(password_verify($datos["contrasena"], $usuario["contrasena"]) ==false){
          $errores[] = "la contrasena es incorrecta";
          }
          return $errores;
  }
  }


 ?>





//hizo pio
//class Validador{

  //public function validarRegistro($datos){

    //$errores = [];

    //if ($datos) {
      //if (strlen($datos["nombre"])==0) {
        //$errores[] = "El campo nombre se encuentra vacio";
      //}
      //if (strlen($datos["apellido"])==0) {
        //$errores[] = "El campo apellido se encuentra vacio";
      //}
      //if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      //  $errores[] = "El email tiene un formato incorrecto";
      //}
      //if (strlen($datos["contrasenia"])<=6) {
      //  $errores[] ="La contraseña tiene menos de 6 caracteres";
      //}
     // if ($datos["contrasenia"] != $datos["recontras"]) {
     //   $errores[] = "Las contraseñas no coinciden";
     // }
                         //comparalos va un  if($datos) y despues solo if 
    //  if ($datos) {
    //  if (strlen($datos["nombre"])==0) {
    //    $errores[] = "El campo nombre se encuentra vacio";
    //  }
    //  if (strlen($datos["apellido"])==0) {
    //    $errores[] = "El campo apellido se encuentra vacio";
    //  }
    //  if (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    //    $errores[] = "El email tiene un formato incorrecto";
      }
    //  if (strlen($datos["contrasenia"])<=6) {
    //    $errores[] ="La contraseña tiene menos de 6 caracteres";
     // }
    //  if ($datos["contrasenia"] != $datos["recontras"]) {
     //   $errores[] = "Las contraseñas no coinciden";
     // }