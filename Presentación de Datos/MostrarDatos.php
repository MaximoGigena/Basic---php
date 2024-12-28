<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])){
    $nombre = htmlspecialchars($_POST['nombre']);
    echo ("El nombre es nombre es: $nombre");
}
?>