<?php

    require("conexion.php");
    $archivo = fopen("ASCII RPE.txt", "r");

    while(!feof($archivo)) {
        $datos = fgets($archivo);
        $data = explode(",", $datos);
        //lee y muestra los datos del archivo de texto
        echo "Id: ".$data[0]."<br>";
        echo "cantidad: ".$data[1]."<br>";
        echo "fecha: ".$data[2]."<br>";
        echo "hora: ".$data[3]."<br>";
        
        //Creamos el SQL para insertar los datos
        $InserData = ("INSERT INTO depositos (id, cantidad, fecha, hora) VALUES('$data[0]', '$data[1]', '$data[2]', '$data[3]')");
        $resultadoInsertData = mysqli_query($conexion, $InserData);

        echo "<br>";
       
    }
    fclose($archivo);

?>