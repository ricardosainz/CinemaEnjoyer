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
          
          <form action="query.php" method="POST">
              <p>¿Te gusta el cine de acción?</p>
              <p><input type="radio" name="r1" value="200"> Si</p>
              <p><input type="radio" name="r1" value="-200"> No </p>

              <p>¿Te gusta el cine de animación?</p>
              <p><input type="radio" name="r2" value="-200"> Si</p>
              <p><input type="radio" name="r2" value="200"> No </p>

              <p>¿Que prefieres?</p>
              <p><input type="radio" name="r3" value="-100"> Frío</p>
              <p><input type="radio" name="r3" value="100">Calor </p>

              <p>¿Que elegirias?</p>
              <p><input type="radio" name="r4" value="-100">Quedarte en casa</p>
              <p><input type="radio" name="r4" value="100">Salir con tus amigos</p>

              <p>¿Como definirias tu estado de animo ahora mismo?</p>
              <p><input type="radio" name="r5" value="-100">Triste</p>
              <p><input type="radio" name="r5" value="100">Contento/a</p>

              <p>¿Que comerías en este momento?</p>
              <p><input type="radio" name="r6" value="-100">Dulce</p>
              <p><input type="radio" name="r6" value="100">Salado</p>
              
              <p>¿Que estación prefieres?</p>
              <p><input type="radio" name="r7" value="-100">Otoño</p>
              <p><input type="radio" name="r7" value="100">Primavera</p>

              <p> <input type="submit" value="Verificar"> </p>
          </form>
      </fieldset>
      </div>
    </div>



    <?php
    include "../includes/footer.php";
    ?>
  </body>
</html>