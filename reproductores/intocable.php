
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
    <title> INTOCABLE </title>
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
        <video src="../mp4/intocable.mp4" width=890 height=500 controls poster="vistaprevia.jpg">
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
  <p style="color:black;"><strong>Philippe</strong>, un aristócrata millonario que se ha quedado tetrapléjico a causa de un accidente de parapente, contrata como cuidador a domicilio a <strong>Driss</strong>, un inmigrante de un barrio marginal recién salido de la cárcel. Aunque, a primera vista, no parece la persona más indicada, los dos acaban logrando que convivan Vivaldi y Earth Wind and Fire, la elocuencia y la hilaridad, los trajes de etiqueta y el chándal. Dos mundos enfrentados que, poco a poco, congenian hasta forjar una amistad tan disparatada, divertida y sólida como inesperada, una relación única en su especie de la que saltan chispas. </p>
</div>

<button class="accordion">DURACIÓN</button>
<div class="panel">
  <p style="color:black;">109 minutos (1 horas 49 minutos)</p>
</div>

<button class="accordion">REPARTO</button>
<div class="panel">
  <ul style="color:black;">
    <li><p><strong>François Cluzet</strong> como Philippe</li></p>
    <li><p><strong>Omar Sy</strong> como Driss</li></p>
    <li><p><strong>Anne Le Ny</strong> como Yvonne</li></p>
    <li><p><strong>Audrey Fleurot</strong> como Magalie</li></p>
    <li><p><strong>Clotilde Mollet</strong> como Marcelle</li></p>
    <li><p><strong>Alba Gaïa Kraghede Bellugi</strong> como Elisa [Como Alba Gaïa Bellugi]</li></p>
    <li><p><strong>Cyril Mendy</strong> como Adama</li></p>
    <li><p><strong>Christian Ameri</strong> como Albert</li></p>
    <li><p><strong>Grégoire Oestermann</strong> como Antoine</li></p>
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
        $_SESSION['miTitulo']="Intocable";
        $_SESSION['miClaseName']="intocable.php";
    ?>
</body>
</html>