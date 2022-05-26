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
                <form action="monstruossa.php" method="POST">
                    <p>1. ¿Cuál es el lema de Monstruos S. A.? </p>
                    <p><input type="radio" name="r1" value="SI"> Asustamos porque nos preocupamos</p>
                    <p><input type="radio" name="r1" value="NO"> Sustos que dan gusto</p>

                    <p>2. ¿Qué apodo le pone Celia a Mike Wazowski?</p>
                    <p><input type="radio" name="r2" value="SI"> Ojito redondo</p>
                    <p><input type="radio" name="r2" value="NO"> Ojito saltón </p>

                    <p>3. ¿Qué guarda Mike en su taquilla? </p>
                    <p><input type="radio" name="r3" value="SI"> Una lentilla gigante</p>
                    <p><input type="radio" name="r3" value="NO"> Una foto de su madre </p>

                    <p>4. ¿Qué les ofrece el abominable hombre de las nieves a Mike y a Sully? </p>
                    <p><input type="radio" name="r4" value="SI"> Helado de limón</p>
                    <p><input type="radio" name="r4" value="NO"> Botas de nieves </p>

                    <p>5. ¿El pelo de Celia está formado por…? </p>
                    <p><input type="radio" name="r5" value="SI"> Cucarachas </p>
                    <p><input type="radio" name="r5" value="NO"> Serpientes </p>

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