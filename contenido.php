<?php session_start();

if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

require 'views/contenido.view.php';

?>