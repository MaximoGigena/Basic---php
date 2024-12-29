<?php 
$arr = array(1,5,7,8,3,9,10,2,10,5,6,9,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10);
$suma = 0;
$promedio = 0; 

foreach($arr as $valor){
    $suma += $valor;
}
$promedio = $suma/count($arr);
print("promedio: ". $promedio); 

if($promedio >= 6){
    print("\nel alumno fue aprobado");
}
else{
    print("\nel alumno fue desaprobado");
}
?>