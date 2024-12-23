<?php
$numero = 10;

function Calcular($numero){
    
    $factorial = 1; 
    for($i = 1; $i <= $numero; $i++){
        $factorial *= $i;
        print ($factorial. "\n");
        
 }
}
Calcular($numero);
?>