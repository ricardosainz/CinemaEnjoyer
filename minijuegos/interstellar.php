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
                    <form action="interstellar.php" method="POST">
                        <p>1. ¿Por qué creen cooper y sus hijos que su dormitorio esta embrujado? </p>
                        <p><input type="radio" name="r1" value="SI"> Por un fantasma que se comunica cuando tira los libros</p>
                        <p><input type="radio" name="r1" value="NO"> Por qué se oyen ruidos extraños y caen los libros del estante</p>

                        <p>2. ¿Por qué cuando van a casa de cooper y sus hijos, a lo lejos se ve un remolino de tierra?</p>
                        <p><input type="radio" name="r2" value="SI"> Por qué hay mucha contaminación</p>
                        <p><input type="radio" name="r2" value="NO"> Porqué es la contaminación que a causado la civilización humana </p>

                        <p>3. ¿Qué es lo que les dice el doctor John Brand, a los Rangers? </p>
                        <p><input type="radio" name="r3" value="SI"> Les dice que un agujero negro fue creado por una inteligencia extraterrestre</p>
                        <p><input type="radio" name="r3" value="NO"> Que solo era un agujero</p>

                        <p>4. ¿Qué hace el personaje de Anne Hathaway? </p>
                        <p><input type="radio" name="r4" value="SI"> Una enfermera</p>
                        <p><input type="radio" name="r4" value="NO"> La doctora que acompaña a cooper en una misión </p>

                        <p>5. ¿Cuántos Rangers envía la NASA? </p>
                        <p><input type="radio" name="r5" value="SI"> 5 Rangers </p>
                        <p><input type="radio" name="r5" value="NO"> 12 Rangers </p>

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
          if($r2 == "NO"){
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
          if($r4 == "NO"){
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