<?php
//variables de la conexión a la BD
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "depositos";

//comprobamos la conexión
$conexion = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
$db = mysqli_select_db($conexion, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

?>