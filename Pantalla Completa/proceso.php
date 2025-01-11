<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre']) && isset($_POST['apellido'])){
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');
        $apellido = htmlspecialchars($_POST['apellido']?? '');
    }
    include 'galeria.html'; 
    exit;
?>