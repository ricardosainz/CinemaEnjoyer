<?php
include('bd.php');
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;
$_SESSION['password']=$password;

$conexion=mysqli_connect("localhost","root","1234","rsainztfg");

$consulta="SELECT * FROM usuarios where email='$email' and password='$password'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['logueado']=true;
    header("location:../paginas/cartelera.php");

}else{
    $_SESSION['logueado']=false;
    ?>
    <?php
    include("../paginas/iniciarsesion.php");

    ?>
        <script> window.alert("Email o contraseña incorrectos")</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
