<!doctype html>
<html lang="es">
  <head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/estilospremium.css">
  </head>
  <header>
  <?php
    include "../includes/header.php";
    ?>
  </header>
  <body>
  <div class="row" style="margin-left: 600px;">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <fieldset>
                <legend> TEST </legend>
                <form action="intocable.php" method="POST">
                    <p>1. ¿Cuál es el nombre original de deadpool? </p>
                    <p><input type="radio" name="r1" value="SI"> Thom Brock</p>
                    <p><input type="radio" name="r1" value="NO"> Wade Wilson</p>

                    <p>2.¿Qué imagen tiene en su mochila?</p>
                    <p><input type="radio" name="r2" value="SI"> Hello kitty.</p>
                    <p><input type="radio" name="r2" value="NO"> Barbie. </p>

                    <p>3. ¿Quienes crearon a Deadpool? </p>
                    <p><input type="radio" name="r3" value="SI"> Rob Liefeld & Fabian Nicieza.</p>
                    <p><input type="radio" name="r3" value="NO"> Andy Serkis & Mark Hamill. </p>

                    <p>4. Deadpool le tiene miedo a las vacas y siente debilidad por los gatos. </p>
                    <p><input type="radio" name="r4" value="SI"> Verdadero</p>
                    <p><input type="radio" name="r4" value="NO"> Falso </p>

                    <p>5. ¿Qué enfermedad sufría deadpool?  </p>
                    <p><input type="radio" name="r5" value="SI"> SIDA</p>
                    <p><input type="radio" name="r5" value="NO"> Cáncer </p>

                    <p> <input type="submit" value="Verificar"> </p>
                </form>
            </fieldset>
        </div>
    </div>

    <?php
      if($_POST){
          $r1 = $_POST["r1"];
          $r2 = $_POST["r2"];
          $r3 = $_POST["r3"];
          $r4 = $_POST["r4"];
          $r5 = $_POST["r5"];
          $c = 0; // contador de aciertos (correctas)
          $i = 0; // contador de fallos (incorrectas)

          // pregunta 1
          if($r1 == "NO"){
            print "<h1 style='text-align: center'>Respuesta 1 correcta </h1><br>";
            $c+=1;
          } else {
              print "<h1 style='text-align: center'>Respuesta 1 incorrecta </h1><br>";
              $i+=1;
          }

          // pregunta 2
          if($r2 == "SI"){
              print "<h1 style='text-align: center'>Respuesta 2 correcta </h1><br>";
              $c+=1;
          } else {
              print "<h1 style='text-align: center'>Respuesta 2 incorrecta </h1><br>";
              $i+=1;
          }

          // pregunta 3
          if($r3 == "SI"){
              print "<h1 style='text-align: center'>Respuesta 3 correcta </h1><br>";
              $c+=1;
          } else {
              print "<h1 style='text-align: center'>Respuesta 3 incorrecta </h1><br>";
              $i+=1;
          }

          // pregunta 4
          if($r4 == "SI"){
            print "<h1 style='text-align: center'>Respuesta 4 correcta </h1><br>";
            $c+=1;
        } else {
            print "<h1 style='text-align: center'>Respuesta 4 incorrecta </h1><br>";
            $i+=1;
        }

        // pregunta 5
        if($r5 == "NO"){
            print "<h1 style='text-align: center'>Respuesta 5 correcta </h1><br>";
            $c+=1;
        } else {
            print "<h1 style='text-align: center'>Respuesta 5 incorrecta </h1><br>";
            $i+=1;
        }

          // resultados
          if($c==5){
            print " <p style='text-align: center'> Enhorabuena, preguntas correctas: $c</p><br><br><br>";
        } else {
            print " <p style='text-align: center'> Vaya... la próxima será mejor, fallos: $i </p><br><br><br>";
        }

      }
    ?>
  </body>
</html>