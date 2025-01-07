<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre']) && isset($_POST['apellido'])){
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');
        $apellido = htmlspecialchars($_POST['apellido']?? '');
    }
    header("Location: https://www.youtube.com/watch?v=35XFAkwmU4c"); 
    exit;
?>