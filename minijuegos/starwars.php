<!doctype html>
<html lang="es">
  <head>
    <title>STARWARS</title>
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
            <p>1. ¿Cómo se llama el jefe de seguridad de la reina Amidala? </p>
            <p><input type="radio" name="r1" value="SI"> Panaka</p>
            <p><input type="radio" name="r1" value="NO"> Fang Zar</p>

            <p>2.¿En qué se inspiró George Lucas para crear a Chewbacca?</p>
            <p><input type="radio" name="r2" value="SI"> En su perro</p>
            <p><input type="radio" name="r2" value="NO"> En el Yeti </p>

            <p>3. ¿Cuál de estos personajes aparece en los seis episodios de la saga Star Wars? </p>
            <p><input type="radio" name="r3" value="SI"> R2D2</p>
            <p><input type="radio" name="r3" value="NO"> El Emperador </p>

            <p>4. 
            ¿Cómo se llama el sistema helado que aparece en el episodio V? </p>
            <p><input type="radio" name="r3" value="SI"> Landon</p>
            <p><input type="radio" name="r3" value="NO"> Hoth </p>

            <p>5. ¿Quién mata a Java el Hutt? </p>
            <p><input type="radio" name="r3" value="SI"> La princesa Leia</p>
            <p><input type="radio" name="r3" value="NO"> Han Solo </p>

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