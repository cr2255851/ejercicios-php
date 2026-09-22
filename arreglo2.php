<?php 
error_reporting(0);
    $persona = array(
        'nombre' => 'juan',
        'apellido' => 'perez', 
        'pais' => 'venezuela'
    );

    foreach($persona as $persona => $valor){
        //se pues escribir asi :
        //print "$persona es de $valor<br>";
        // O se tambien asi:
        echo "<strong>$persona:</strong> $valor <br>";
    }

?>