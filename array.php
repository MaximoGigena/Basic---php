<?php 
$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

function esPar($arr){
    foreach($arr as $num){
        if(($num % 2) == 0){
            echo  $num. "\n";
        }
    }
}

echo "Los números pares en el array son los siguientes:\n";
esPar($arr);
?>