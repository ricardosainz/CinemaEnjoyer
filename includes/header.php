<!-- importante -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="../css/estilobuscador.css">

<?php include("../carteleraClases/conexion.php"); ?>
<header>
    <nav>
        <div class="row">
            <ul class="col-lg-12 col-md-12 col-sm-12">
                <li>
                    <a href="../paginas/registrarse.php" class="apartados"> <img src="../pics/logo2.png"></a>
                </li>
                <li>
                    <a href="../TestPreguntas/test.php" > Test </a>
                </li>
                <li>
                    <a href="../paginas/minijuegos.php" > Mini-Juegos </a>
                </li>
                <li>
                    <a href="../paginas/cartelera.php" > Cartelera </a>
                </li>
                <li>
                    <a href="../paginas/favoritos.php" > Favoritos </a>
                </li>
                <li>
                    |
                </li>
                <li>
                    <a href="../paginas/registrarse.php" >Registrarse </a>
                </li>
                <li>
                    <a href="../paginas/iniciarsesion.php" >Iniciar Sesión</a>
                </li>
                <li>
                    <a href="../paginas/logout.php" >Cerrar Sesión</a>
                </li>
                <li>
                    |
                </li>
                <li>
                    <!-- BUSCADOR -->
                    <div style="font-size:20px" class="formulario">

                    <div class="box">

                        <div  class="container-1">
                        <span class="icon"><i class="fa fa-search"></i></span>
                            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="" id="buscar_1" name="buscar_1" placeholder="Search...">
                        </div>
                        <!--<button  style="color:blue;" class="btn btn-primary" onclick="buscar_ahora($('#buscar').val());">Buscar</button>-->

                        <div class="card col-12 mt-5">
                            <div class="card-body">
                                <div id="datos_buscador" class="container pl-5 pr-5"></div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    <script type="text/javascript">
                        function buscar_ahora(buscar) {
                        var parametros = {"buscar":buscar};
                        $.ajax({
                        data:parametros,
                        type: 'POST',
                        url: '../carteleraClases/buscador.php',
                        success: function(data) {
                        document.getElementById("datos_buscador").innerHTML = data;
                        }
                        });
                        }
                    //   buscar_ahora();
                    </script>
                </li>
            </ul>
        </div>
    </nav>
</header>
