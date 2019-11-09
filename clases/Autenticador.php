<?php 
class Autenticador{

	 static public function seteoUsuario{
	 	$_SESSION["nombre"] = $usuario["nombre"];
	 	$_SESSION["email"] = $usuario["email"];
	 	$_SESSION["foto"] = $usuario["foto"];
	 }
}

 ?>