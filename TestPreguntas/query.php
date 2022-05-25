<?php
include('bd.php');

$r1 = $_POST["r1"];
$r2 = $_POST["r2"];
$r3 = $_POST["r3"];
$r4 = $_POST["r4"];
$r5 = $_POST["r5"];
$r6 = $_POST["r6"];
$r7 = $_POST["r7"];
$c = 0; // contador de puntos

// pregunta 1
if($r1 == "-200"){
    $c+=200;
} else {
    $c+=200;
}

// pregunta 2
if($r2 == "-200"){
    $c+=(-200);
} else {
    $c+=200;
}

// pregunta 3
if($r3 == "-100"){
    $c+=(-100);
} else {
    $c+=100;
}

// pregunta 4
if($r4 == "-100"){
    $c+=(-100);
} else {
    $c+=100;
}

// pregunta 5
if($r4 == "-100"){
    $c+=(-100);
} else {
    $c+=100;
}

// pregunta 6
if($r4 == "-100"){
    $c+=(-100);
} else {
    $c+=100;
}

// pregunta 7
if($r4 == "-100"){
    $c+=(-100);
} else {
    $c+=100;
}



// resultados
//print "Puntuación: ".$c." ptos";

session_start();
$_SESSION['puntos']=$c;

$conexion=mysqli_connect("localhost","root","1234","rsainztfg");

$sql="SELECT *, ABS('$c' - puntos ) diferencia FROM peliculas ORDER BY diferencia LIMIT 1";

$resultado=mysqli_query($conexion,$sql);

if ($resultado = $conexion->query($sql)) { // query your db
    while ($row = $resultado->fetch_object())// fetch object
    {  // display row    
        print "
        <!doctype html>
        <html lang='es'>
        <head>
            <title>Test</title>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            <link rel='stylesheet' href='../css/estilospremium.css'>
        </head>
        <header>
            <?php
            include '../includes/header.php';
            ?>
        </header>
        <body>

        <div class='row' style='margin-left: 800px;' style='margin-botton: 800px;'>
            <div class='col-sm-6 col-md-6 col-lg-6'>
                <div class='botones'>
                    <a href='../reproductores/{$row->titulo}.php' class='btn'>
                        {$row->titulo} <i class='fas fa-chevron-right'></i>
                    </a>
                    <a href='test.php' class='btn2'>
                        Repetir test<i class='fas fa-chevron-right'></i>
                    </a>
                </div>
            </div>
        </div>

        <div class='row' style='margin-left: 300px;'>
        <div class='col-sm-6 col-md-6 col-lg-6'>
            <img src='{$row->portada}'>
        </div>


            <?php
            include '../includes/footer.php';
            ?>
        </body>
        </html>
        
        "; 
    }//end while loop
    $resultado->free(); // free result set
}//end if

mysqli_close($conexion);