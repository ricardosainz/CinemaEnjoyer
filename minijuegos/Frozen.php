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
            <p>1. ¿Quién borra la memoria de Anna para que olvide que Elsa tiene poderes? </p>
            <p><input type="radio" name="r1" value="SI">Un troll</p>
            <p><input type="radio" name="r1" value="NO">Los elfos</p>

            <p>2.¿De qué tiene miedo Elsa?</p>
            <p><input type="radio" name="r2" value="SI"> Que descubran que tiene poderes</p>
            <p><input type="radio" name="r2" value="NO"> De ser una mala reina </p>

            <p>3. ¿De dónde es el príncipe Hans? </p>
            <p><input type="radio" name="r3" value="SI"> 
De las islas del sur</p>
            <p><input type="radio" name="r3" value="NO"> de Arenndelles </p>

            <p>4.  ¿Cuántos años pasan desde el final de "Hazme un muñeco de nieve" hasta el día de la coronación de Elsa? </p>
            <p><input type="radio" name="r3" value="SI"> 10 años</p>
            <p><input type="radio" name="r3" value="NO"> 3 años </p>

            <p>5. Mientras Anna canta "Hazme un muñeco de nieve" le da ánimos al personaje de un cuadro, ¿quién es? </p>
            <p><input type="radio" name="r3" value="SI"> Juana de arco</p>
            <p><input type="radio" name="r3" value="NO"> William Wallace </p>

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
          if($r3 == "SI"){
              print "Respuesta 3 correcra <br>";
              $c+=1;
          } else {
              print "Respuesta 3 incorrecta <br>";
              $i+=1;
          }

          // pregunta 4
          if($r3 == "NO"){
            print "Respuesta 3 correcra <br>";
            $c+=1;
        } else {
            print "Respuesta 3 incorrecta <br>";
            $i+=1;
        }

        // pregunta 5
        if($r3 == "SI"){
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