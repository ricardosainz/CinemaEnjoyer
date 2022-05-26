<?php
session_start();
if($_SESSION['logueado']!=true){
// si no hay sesion del usuario, es decir no esta logeado lo redirijo a la pagina de login
    header("Location: ../paginas/iniciarsesion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> STAR WARS THE RISE OF SKYWALKER </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/estilospremium.css">
    <script src="../js/js.js"> </script>
    

    <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>
    <header>
        <?php
        include "../includes/header.php";
        ?>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    <section style="background-color: rgb(0, 255, 200);" class="reproductor">
        <video src="../mp4/starwars.mp4" width=890 height=500 controls poster="vistaprevia.jpg">
            Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
            La versión descargable está disponible en <a href="URL">Enlace</a>. 
        </video>
    </section>

    <div class='row' style='margin-left: 800px;' style='margin-botton: 800px;'>
        <div class='col-sm-6 col-md-6 col-lg-6'>
            <div class='botones'>
                <a href='funciones.php' class='btn'>
                    Añadir a favoritos <i class='fas fa-chevron-right'></i>
                </a>
                <a href='funciones2.php' class='btn2'>
                    Eliminar de favoritos <i class='fas fa-chevron-right'></i>
                </a>
            </div>
        </div>
    </div>

    <h2 style="color: rgb(0, 255, 200);">PULSA PARA EXPADIR</h2>

<button class="accordion">SINAPSIS</button>
<div class="panel">
  <p style="color:black;">Un año después de los eventos de <strong>"Los últimos Jedi"</strong>, los restos de la Resistencia se enfrentarán una vez más a la Primera Orden, involucrando conflictos del pasado y del presente. Mientras tanto, el antiguo conflicto entre los Jedi y los Sith llegará a su clímax, lo que llevará a la saga de los Skywalker a un final definitivo. Final de la trilogía iniciada con "El despertar de la Fuerza".</p>
</div>

<button class="accordion">DURACIÓN</button>
<div class="panel">
  <p style="color:black;">141 minutos (1 hora 21 minutos)</p>
</div>

<button class="accordion">REPARTO</button>
<div class="panel">
  <ul style="color:black;">
    <li><p><strong>Carrie Fisher</strong> como Leia Organa</p></li>
    <li><p><strong>Mark Hamill</strong> como Luke Skywalker</p></li>
    <li><p><strong>Adam Driver</strong> como Kylo Ren/Ben Solo</p></li>
    <li><p><strong>Daisy Ridley</strong> como Rey, una ex carroñera de Jakku</p></li>
    <li><p><strong>John Boyega</strong> como Finn</p></li>
    <li><p><strong>Oscar Isaac</strong> como Poe Dameron</p></li>
    <li><p><strong>Anthony Daniels</strong> como C-3PO (voz)</p></li>
    <li><p><strong>Naomi Ackie</strong> como Jannah</p></li>
    <li><p><strong>Domhnall Gleeson</strong> como el General Hux</p></li>
    <li><p><strong>Richard E. Grant</strong> como el General Enric Pryde</p></li>
    <li><p><strong>Lupita Nyong'o</strong> como Maz Kanata</p></li>
    <li><p><strong>Keri Russell</strong> como Zorii Bliss</p></li>
    <li><p><strong>Joonas Suotamo</strong> como Chewbacca</p></li>
    <li><p><strong>Kelly Marie Tran</strong> como Rose Tico</p></li>
    <li><p><strong>Ian McDiarmid</strong> como el Emperador Palpatine</p></li>
    <li><p><strong>Billy Dee Williams</strong> como Lando Calrissian, un veterano de la Alianza Rebelde</p></li>
</ul>


</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


    

    <!-- Footer Links -->
    <div class="footer-links">
        <div class="footer-container">
            <ul>
                <li>
                    <a href="#">
                        <h3>EMPRESA</h3>
                    </a>
                </li>
                <li>
                    <a href="#">Acerca de </a>
                </li>
                <li>
                    <a href="#">Empleo</a>
                </li>
                <li>
                    <a href="#">For the Record</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <h3>COMUNIDADES</h3>
                    </a>
                </li>
                <li>
                    <a href="#">Para artistas</a>
                </li>
                <li>
                    <a href="#">Desarrolladores</a>
                </li>
                <li>
                    <a href="#">Publicidad</a>
                </li>
                <li>
                    <a href="#">Inversores</a>
                </li>
                <li>
                    <a href="#">Proveedores</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <h3>ENLACES ÚTILES</h3>
                    </a>
                </li>
                <li>
                    <a href="#">Asistencia</a>
                </li>
                <li>
                    <a href="#">Reproductor web</a>
                </li>
                <li>
                    <a href="#">App gratis para móvil</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <h3>SABER MÁS</h3>
                    </a>
                </li>
                <li>
                    <a href="#">Asistencia</a>
                </li>
                <li>
                    <a href="#">Reproductor web</a>
                </li>
                <li>
                    <a href="#">App gratis para móvil</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <h3>Spotify</h3>
    </footer>
    <?php
        $_SESSION['miTitulo']="StarWars";
        $_SESSION['miClaseName']="starwars.php";
    ?>
</body>
</html>