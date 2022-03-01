<?php
 require("conexion.php");

// Inicializamos la variable URl
$url = 'Guardar.php?nombre=Erik+Castillo&email=erik%40yahoo.com&gustos[]=Ver+la+tv&gustos[]=Salir+al+cine&gustos[]=Jugar+Futbol';
     
//Utilice la función parse_url() para analizar la URL
//y devolver una matriz asociativa que contiene sus diversos componentes
$url_components = parse_url($url);
 
//Utilice la función parse_str() para analizar la
//cadena pasada a través de URL
parse_str($url_components['query'], $params);
     
// Almacenamos en variables los resultados

$nombre = $params['nombre'];
$email = $params['email'];
$gustos = implode(', ', $params['gustos']);

// Mostramos los resultados
echo 'Nombre : '.$params['nombre'], '<br>';
echo 'Email: '.$params['email'], '<br>';
echo 'Gustos :'.implode(', ', $params['gustos']);


//Creamos el SQL para insertar los datos
$InserData = ("INSERT INTO datos_url (id, nombre, email, gustos) VALUES('', '$nombre', '$email', '$gustos')");
$resultadoInsertData = mysqli_query($conexion, $InserData);

?>