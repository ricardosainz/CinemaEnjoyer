<!DOCTYPE html>
<html lang="en">
<head>
    <title> FEELTHEMUSIC </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloreproductor.css">
    <link rel="stylesheet" href="../css/slider.css">
    <script src="../js/js.js"> </script>

</head>
<body>
<header>
    <?php
    include "../includes/header.php";
    ?>
</header>

<br><br><br><br><br><br>
<!-- SLIDER -->
<div class="showcase">
    <div class="slider">
        <ul>
            <li>
                <img src="../picsPeliculas/starwars.png" alt="">
            </li>
            <li>
                <img src="../picsPeliculas/theBatman.jpg" alt="">
            </li>
            <li>
                <img src="../picsPeliculas/spiderman.jpg" alt="">
            </li>
            
            <li>
                <img src="../picsPeliculas/starwars.png" alt="">
            </li>
        </ul>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br>

<!-- SHOWCASE -->
<section >
    <div class="playlist grid">
        <div class="targeta img">
            <a href="../reproductores/spiderman.php"> <img src="../portadas/spiderman.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/theBatman.php"> <img src="../portadas/theBatman.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/deadpool.php"> <img src="../portadas/deadpool.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/intocable.php"> <img src="../portadas/intocable.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/frozen.php"> <img src="../portadas/frozen.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/monstruossa.php"> <img src="../portadas/monstruossa.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/interstellar.php"> <img src="../portadas/interstellar.jpg" class="imagentonta"></a>
        </div>
        <div class="targeta img">
            <a href="../reproductores/starwars.php"> <img src="../portadas/starwars.jpg" class="imagentonta"></a>
        </div>
    </div>
</section>
<br>
<!-- Footer Links -->
<?php
include "../includes/footer.php";
?>
</body>
</html>
