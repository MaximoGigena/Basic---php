<?php

$numero = '1';

function esParOImpar($numero){
    if($numero % 2 == 0){
        print("El número es par");
    }
    else{
        print("El número es impar");
    }
}

esParOImpar($numero);
?>