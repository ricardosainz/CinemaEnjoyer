# CinemaEnjoyer

Demo -> https://youtu.be/M4HKVdp4QkM

- Registro: La clase Persona.php contiene una función que inserta los datos de un objeto de su tipo en la tabla Usuarios, este objeto lo crearemos a partir de los datos introducidos en el formulario de la interfaz Registro.php. 
- Login: La clase Validar.php consulta en la tabla Usuarios un registro con el email y la contraseña que hemos obtenido del formulario de la interfaz IniciarSesion.php.
- Test: Mediante las respuestas obtenidas a partir del formulario de la interfaz Test.php, calcularemos una puntuación basada en un sistema de asignación de puntos.
  Consultaremos dicha puntuación en la tabla Peliculas (usando una Query que nos devuelva el registro, es decir, la película, con la puntuación igual o más cercana a la
  dada) e inyectaremos los registros devueltos en la clase Query.php en forma de título, vídeo, sinapsis, etc.
- Favoritos: Cada usuario tendrá una lista de favoritos en la BBDD (la tabla Peliculas y los usuarios se relacionan mediante un campo idUsuarios que pertenece a la tabla
  Peliculas, que seguirá una nomenclatura concreta) y, al entrar a la interfaz Favoritos, primero verificaremos si el usuario está logueado (usando un
  $_SESSION[‘logueado’]: booleano) y, si ha iniciado sesión, seleccionaremos en la tabla Peliculas un titulo igual que el nuestro y cuyo campo idUsuarios contenga el ID
  del usuario logueado. 
- Reproductores: Al entrar en cualquier reproductor de cualquier película, se verificará si el usuario ha iniciado sesión (de lo contrario será redirigido a
  IniciarSesion.php). Encontramos dos botones para añadir y eliminar la película que estamos reproduciendo de nuestra lista de favoritos. Estos botones llamarán a las
  clases Funcion.php y Funcion2.php, que harán un update a la tabla Peliculas (al campo idUsuarios) añadiendo o eliminando nuestro ID de usuario de dicho campo.
