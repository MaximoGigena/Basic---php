<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre']) && isset($_POST['contraseña'])){
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $contraseña = htmlspecialchars($_POST['contraseña'] ?? '');

    if($_POST['nombre'] === 'maximo gigena' && $_POST['contraseña'] === 'tere'){
      echo("Bienvenido mi Estimado: ". $nombre);
    }
    else{
        echo("usuario o contraseñas incorrectos");
    }
}
else{
    echo("metodo invalido :P");
}
?>