<?php
   

    
    for ($i = 1; $i<=20; $i++) {
        $potencia = 2**$i;
        $suma = ($potencia + $i);
        $resultado = ($suma / 2);
        echo $resultado, '<br>';
     
    }
?>