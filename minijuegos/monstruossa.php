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
            <p>1. ¿Cuál es el lema de Monstruos S. A.? </p>
            <p><input type="radio" name="r1" value="SI"> Asustamos porque nos preocupamos</p>
            <p><input type="radio" name="r1" value="NO"> Sustos que dan gusto</p>

            <p>2. ¿Qué apodo le pone Celia a Mike Wazowski?</p>
            <p><input type="radio" name="r2" value="SI"> Ojito redondo</p>
            <p><input type="radio" name="r2" value="NO"> Ojito saltón </p>

            <p>3. ¿Qué guarda Mike en su taquilla? </p>
            <p><input type="radio" name="r3" value="SI"> 
Una lentilla gigante</p>
            <p><input type="radio" name="r3" value="NO"> Una foto de su madre </p>

            <p>4. ¿Qué les ofrece el abominable hombre de las nieves a Mike y a Sully? </p>
            <p><input type="radio" name="r3" value="SI"> Helado de limón</p>
            <p><input type="radio" name="r3" value="NO"> Botas de nieves </p>

            <p>5. ¿El pelo de Celia está formado por…? </p>
            <p><input type="radio" name="r3" value="SI"> Cucarachas </p>
            <p><input type="radio" name="r3" value="NO"> Serpientes </p>

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
          if($r2 == "NO"){
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