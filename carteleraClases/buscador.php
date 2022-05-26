<?php

include('conexion.php');
session_start();

$mysqli = new mysqli("localhost", "root", "1234", "rsainztfg");
if (mysqli_connect_errno()) { // check connection
    printf("Connect failed: %s\n", mysqli_connect_error);
    exit();
}
    // your sql query 
    $sql = "SELECT * FROM peliculas WHERE descripcion LIKE LOWER('%".$_POST["buscar"]."%') ";
        if ($result = $mysqli->query($sql)) { // query your db
            

            while ($row = $result->fetch_object())// fetch object
            {  // display row  
     
                echo "<a href='../reproductores/{$row->titulo}.php' > <img src='{$row->portada}'></a>"; //habría que ponerle la foto de la cartelera con un img src="$row->portada" 
            }//end while loop
            $result->free(); // free result set
        }//end if
$mysqli->close(); // close connection