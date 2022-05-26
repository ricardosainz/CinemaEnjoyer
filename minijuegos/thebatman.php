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
                <form action="thebatman.php" method="POST">
                    <p>1. ¿Cúal es el verdadero nombre de Batman?</p>
                    <p><input type="radio" name="r1" value="SI"> Bruce Wayne</p>
                    <p><input type="radio" name="r1" value="NO"> Bruce Wills </p>

                    <p>2. ¿Quién fue el creador de Batman?</p>
                    <p><input type="radio" name="r2" value="SI"> Bob Kane y Bill Finger</p>
                    <p><input type="radio" name="r2" value="NO"> Ben Kane y Bob Finger </p>

                    <p>3. ¿De dónde procede el nombre de Gotham? </p>
                    <p><input type="radio" name="r3" value="SI"> De un libro</p>
                    <p><input type="radio" name="r3" value="NO"> De una libreta telefónica </p>

                    <p>4. ¿Quién el primer actor en interpretar al Joker? </p>
                    <p><input type="radio" name="r4" value="SI"> Cesar Romero</p>
                    <p><input type="radio" name="r4" value="NO"> Health Ledger </p>

                    <p>5. ¿Cómo se llaman los padres de batman? </p>
                    <p><input type="radio" name="r5" value="SI"> Thomas y Mary</p>
                    <p><input type="radio" name="r5" value="NO"> Thomas y Martha </p>

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
          if($r1 == "SI"){
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
          if($r3 == "NO"){
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