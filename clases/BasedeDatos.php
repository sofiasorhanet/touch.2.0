<?php //base de datos//
class BaseMYSQL{
 static public function conexion($bd, $host, $puerto, $usuario, $contrasena){

     try {
        $dsn = "mysql:host=".$host.";"."bdname=".$bd.";"."port=".$puerto;
        $baseDatos = new PDO($dsn, $usuario, $contrasena);
        $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $baseDatos;
    }catch (PDOException $errores) {
        echo "No me puedo conectar a la base de datos". $errores->getmessage();
    }
}
//buscar por email
static public function BuscarPorEmail($pdo, $email){
        $consulta = "SELECT * FROM usuarioS WHERE email = :email";
        $usuarios = $pdo->prepare($consulta);
        $usuario->bindvalue(':email', $email);
        $usuario->execute();
        $usuarioEncontrado = $usuario->fetchALL(PDO::FETCH_ASSOC);
        return $usuarioEncontrado;
     }

//hizo pio
     //static public function buscarPorEmail($email,$pdo,$tabla){
     //      $sql = "select * from $tabla where email = :email";
     //      $query = $pdo->prepare($sql);
     //      $query->bindValue(':email',$email);
     //      $query->execute();
     //      $usuario = $query->fetch(PDO::FETCH_ASSOC);
     //      return $usuario;

//guardar usuario
static public function GuardarUsuario($pdo, $usuario){
        $consulta = "INSERT INTO usuarios VALUES(default, :nombre, :email, :contrasena, :foto)";
        $insertarUsuario = $pdo->prepare($consulta);
        $insertarUsuario->bindvalue(':nombre', $usuario->getnombre());
        $insertarUsuario->bindvalue(':email', $usuario->getemail());
        $insertarUsuario->bindvalue(':contrasena', $usuario->getcontrasena());
        $insertarUsuario->bindvalue(':avatar', $usuario->getavatar());
       
        $insertarUsuario->execute();
     }
}

  ?>
