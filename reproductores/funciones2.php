<?php
    session_start();
    include '../loginClases/bd.php';
    $titulo=$_SESSION['miTitulo'];
    $miId=$_SESSION['id'];
    $miClaseName=$_SESSION['miClaseName'];
    $conexion=mysqli_connect("localhost","root","1234","rsainztfg");

    $sql="SELECT idUsuarios FROM peliculas WHERE titulo='$titulo'";
    $resultado=mysqli_query($conexion,$sql);
    
    if ($resultado = $conexion->query($sql)) { // query your db
        error_reporting(0);
        while ($row = $resultado->fetch_object())// fetch object
        {
            $idUsuariosOriginal=$row->idUsuarios;

            if(str_contains($idUsuariosOriginal,"|$miId|")){

                $idParaEliminar = str_replace("|$miId|","",$idUsuariosOriginal);

                include '../bd.php';
                $conexion=mysqli_connect("localhost","root","1234","rsainztfg");
                
                $consulta="update rsainztfg.peliculas set idUsuarios='$idParaEliminar' where titulo = '$titulo'";
                
                $resultado=mysqli_query($conexion,$consulta);

                if ($resultado = $conexion->query($consulta)) { // query your db
                    //
                    ?>
                        <script> window.alert("Se ha elimiado de favoritos")</script>
                    <?php
                }
                include "$miClaseName";
            }
        }
        include "$miClaseName";
    }
    include "$miClaseName";
    header("Location: $miClaseName");
?>