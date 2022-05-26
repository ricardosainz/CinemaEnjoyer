<?php
session_start();
if($_SESSION['logueado']!=true){
// si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
    header("Location: iniciarsesion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> FAVORITOS </title>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='../css/estilospremium.css'>
</head>
<header>
    <?php
    include '../includes/header.php';
    ?>
</header>
<body>
    <?php
    include '../loginClases/bd.php';
    $email=$_SESSION['email'];
    $conexion=mysqli_connect("localhost","root","1234","rsainztfg");
    
    $sql="SELECT * FROM usuarios WHERE email='$email'";
    
    $resultado=mysqli_query($conexion,$sql);
    
    if ($resultado = $conexion->query($sql)) { // query your db
        while ($row = $resultado->fetch_object())// fetch object
        {
            $idUsuario=$row->id;
            $_SESSION['id']=$idUsuario;

            include '../loginClases/bd.php';
            $conexion=mysqli_connect("localhost","root","1234","rsainztfg");
            
            $sql="SELECT * FROM peliculas WHERE idUsuarios like '%|$idUsuario|%'";
            
            $resultado=mysqli_query($conexion,$sql);
            
            if ($resultado = $conexion->query($sql)) { // query your db
                while ($row = $resultado->fetch_object())// fetch object
                {
                    /**/ 
                    print "
                        <div class='row' style='margin-left: 800px;' style='margin-botton: 800px;'>
                            <div class='col-sm-6 col-md-6 col-lg-6'>
                                <div class='botones'>
                                    <a href='../reproductores/{$row->titulo}.php' class='btn'>
                                        {$row->titulo} <i class='fas fa-chevron-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        include '../includes/footer.php';
                        ?>
                    "; 
                }
            }

        }
    }
    ?>
</body>