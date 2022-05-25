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
            <p>1. ¿Quién fue la primera en interpretar a Gwen Stacy en cine? </p>
            <p><input type="radio" name="r1" value="SI"> Bryce Dallas Howard</p>
            <p><input type="radio" name="r1" value="NO"> Kirsten Dunst</p>

            <p>2.¿De qué color es el traje clásico de Spider-Man?</p>
            <p><input type="radio" name="r2" value="SI"> Rojo y azul</p>
            <p><input type="radio" name="r2" value="NO"> Rojo, azul y negro </p>

            <p>3. ¿Cuál es el único Spider-Man en tener tela de araña de forma orgánica? </p>
            <p><input type="radio" name="r3" value="SI"> Andrew Garfield</p>
            <p><input type="radio" name="r3" value="NO"> Tobey Maguire </p>

            <p>4. 
¿Cuál es el segundo nombre de Peter Parker? </p>
            <p><input type="radio" name="r3" value="SI"> Benjamin</p>
            <p><input type="radio" name="r3" value="NO"> Harry </p>

            <p>5. ¿Cómo se llama el joven protagonista de ‘Spider-Man: Un nuevo universo’?  </p>
            <p><input type="radio" name="r3" value="SI"> Miles Morales</p>
            <p><input type="radio" name="r3" value="NO"> Ángel Quintana </p>

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