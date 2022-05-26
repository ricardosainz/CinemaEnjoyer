<?php
    session_start();
    session_destroy(); // Elimino la sesion
    header("Location: iniciarsesion.php"); //redirijo al login
    exit();
?>