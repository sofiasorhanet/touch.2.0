<?php
//carga los datos de cada registro de accceso
require_once('clases/armadoderegistro.php');
require_once('clases/usuario.php');
require_once('clases/autenticador.php');//falta hacer//
require_once('clases/validador.php');
require_once('clases/BasedeDatos.php');
require_once('clases/.php');
//aca hahy que ver si van las funciones
$validador = new validador();
$bd = 'touch2.0';
$host ='localhost';
$puerto = 3306;
$usuario = '';
$contrasenia ='';

$basededatos = touch2.0BaseMYSQL::conexion($bd, $host, $puerto, $usuario, $contrasenia);



 ?>
