<?php
   
    //La formula que sigue es: (n2 + n)/2
    for ($i = 1; $i<=20; $i++) {
        $potencia = $i**2;
        $suma = ($potencia + $i);
        $resultado = ($suma / 2);
        echo $resultado, '<br>';
     
    }
?>
