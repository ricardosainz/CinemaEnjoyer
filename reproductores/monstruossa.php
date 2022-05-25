<!DOCTYPE html>
<html lang="en">
<head>
    <title> MONSTRUOS S.A. </title>
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
        <video src="../mp4/crepusculo.mp4" width=890 height=500 controls poster="vistaprevia.jpg">
            Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
            La versión descargable está disponible en <a href="URL">Enlace</a>. 
        </video>
    </section>

    <h2 style="color: rgb(0, 255, 200);">PULSA PARA EXPADIR</h2>

<button class="accordion">SINAPSIS</button>
<div class="panel">
  <p style="color:black;"><strong>Monsters Inc.</strong> es la mayor empresa de miedo del mundo, y <strong>James P. Sullivan</strong> es uno de sus mejores empleados. Asustar a los niños no es un trabajo fácil, ya que todos creen que los niños son tóxicos y no pueden tener contacto con ellos. Pero un día una niña se cuela sin querer en la empresa, provocando el caos.</p>
</div>

<button class="accordion">DURACIÓN</button>
<div class="panel">
  <p style="color:black;">88 minutos (1 hora 28 minutos)</p>
</div>

<button class="accordion">CRÍTICAS</button>
<div class="panel">
  <ul style="color:black;">
    <li><p><strong>Roger Ebert: rogerebert.com</strong>: "'Monstruos, S.A.', es un entretenimiento alegre y enérgico y, como otras películas de Pixar, tiene un buen surtido de gags y referencias dirigidas a los adultos". 
</li></p>
    <li><p><strong>Kirk Honeycutt: The Hollywood Reporter </strong> "Un viaje ingenioso, hábil y sorprendentemente inteligente por el mundo de las pesadillas de la infancia"</li></p>   
    <li><p><strong>Elvis Mitchell: The New York Times</strong> "Hace años que no veo una película que use la energía creativa con tanta eficacia como 'Monsters, Inc.'; es una máquina perfecta que no malgasta ni una broma ni una idea."</li></p>    
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
</body>
</html>