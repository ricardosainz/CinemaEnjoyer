<!doctype html>
<html lang="es">
  <head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/estilospremium.css">
  </head>
  <header>
  </header>
  <body>
    <fieldset>
        <legend> TEST </legend>
        <form action="testoriginal.php" method="POST">
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
            <p><input type="radio" name="r3" value="SI"> Cesar Romero</p>
            <p><input type="radio" name="r3" value="NO"> Health Ledger </p>

            <p>5. ¿Cómo se llaman los padres de batman? </p>
            <p><input type="radio" name="r3" value="SI"> Thomas y Mary</p>
            <p><input type="radio" name="r3" value="NO"> Thomas y Martha </p>

            <p> <input type="submit" value="Verificar"> </p>
        </form>
    </fieldset>

    <?php
      if($_POST){
          $r1 = $_POST["r1"];
          $r2 = $_POST["r2"];
          $r3 = $_POST["r3"];
          $r2 = $_POST["r4"];
          $r3 = $_POST["r5"];
          $c = 0; // contador de aciertos (correctas)
          $i = 0; // contador de fallos (incorrectas)

          // pregunta 1
          if($r1 == "SI"){
            print "Respuesta 1 correcra <br>";
            $c+=1;
          } else {
              print "Respuesta 1 incorrecta <br>";
              $i+=1;
          }

          // pregunta 2
          if($r2 == "SI"){
              print "Respuesta 2 correcra <br>";
              $c+=1;
          } else {
              print "Respuesta 2 incorrecta <br>";
              $i+=1;
          }

          // pregunta 3
          if($r3 == "NO"){
              print "Respuesta 3 correcra <br>";
              $c+=1;
          } else {
              print "Respuesta 3 incorrecta <br>";
              $i+=1;
          }

          // pregunta 4
          if($r3 == "SI"){
            print "Respuesta 3 correcra <br>";
            $c+=1;
        } else {
            print "Respuesta 3 incorrecta <br>";
            $i+=1;
        }

        // pregunta 5
        if($r3 == "NO"){
            print "Respuesta 3 correcra <br>";
            $c+=1;
        } else {
            print "Respuesta 3 incorrecta <br>";
            $i+=1;
        }

          // resultados
          if($c==5){
              print "Enhorabuena, preguntas correctas: ".$c;
          } else {
              print "Vaya... la próxima será mejor, fallos: ".$i;
          }

      }
    ?>
  </body>
</html>