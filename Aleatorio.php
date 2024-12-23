<?php 


function Aleatoriedad(){
$numero = rand(0,100);
    if($numero >= 50){
        print("el número es alto: " .$numero);
    }
    else{
        print("el número es bajo: " .$numero);
    }
}

Aleatoriedad(); 

?>