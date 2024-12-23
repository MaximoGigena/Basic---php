<?php 
function esPrimo($numero){

    for ($i = 2; $i <= sqrt($numero); $i++) { 
        if ($numero % $i == 0) {
            print("El número no es primo\n");
            return;
        }
    }

    print("El número es primo\n");
}

$numero = 11; 
esPrimo($numero);
?>