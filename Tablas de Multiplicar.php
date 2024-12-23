<?php 

$numero = 11; 

function MultiplicarLasTablas($numero){
for($i = 1; $i<11; $i++){
    $resultado = $i * $numero;
    print ($resultado. "\n");
    }
} 

MultiplicarLasTablas($numero);

?>