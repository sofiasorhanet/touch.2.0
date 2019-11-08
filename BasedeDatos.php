<?php //base de datos//
class BaseMYSQL{
  public static function conexion($bd, $host, $puerto, $usuario, $contrasena){
 $dsn = "mysql::host=$host;bdname=$bd;port=$puerto";
 try {
   $pdo = new PDO($dsn, $usuario, $contrasena);
   return $pdo;

 } catch (\Exception $e) {
   return $e->getmessage();
 }
}
//buscar por email
static public function buscarporemail($pdo, $email){
  $consulta = "SELECT * FROM usuarioS WHERE email = :email";
  $usuarios = $pdo->prepare($consulta);
  $usuario->bindvalue(`:email`, $email);
  $usuario->execute();
  $usuarioencontrado = $usuario->fetchALL(PDO::FETCH_ASSOC);
  return $usuarioencontrado;
}
//guardar usuario
  static public function guardarusuario($pdo, $usuario){
  $consulta = "INSERT INTO usuarios VALUES(defaul, :nombre, : email, :contrasenia, :avatar)";
  $insertarusuario = $pdo->prepare($consulta);
  $insertarusuario->bindvalue(`:nombre`, $usuario->getnombre());
  $insertarusuario->bindvalue(`:email`, $usuario->getemail());
  $insertarusuario->bindvalue(`:contrasena`, $usuario->getcontrasena());
  $insertarusuario->bindvalue(`:avatar`, $usuario->getavatar());
  $insertarusuario->execute();
  }
}

  ?>
