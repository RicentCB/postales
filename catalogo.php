<?php
    require_once("php/metodos_categorias.php");
    include ("header.html");
?>
    <main class="colorFondoMain" id="catalogo-Contenedor">
        <div class="row">
            <div class="container">
                <h1 class="header blue-text text-darken-3">Categorias</h1>
            </div>
            <div class="divider"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- M E N U   C A T E G O R I A S -->
                <div id="seleccionar-Categoria" class="col s12 m3">
                    <p>Todas las Categorias</p>
                    <div class="row">
                        <div class="contenedor-Categoria-postales col s4 m12">
                            <a href="catalogo.php?id=1" class="titulo-categoria"><i class="fas fa-heart prefix colorLogin"></i>SENTIMIENTOS</a>
                            <ul>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                            </ul>
                        </div>
                        <div class="contenedor-Categoria-postales col s4 m12">
                            <a href="catalogo.php?id=1" class="titulo-categoria"><i class="fas fa-heart prefix colorLogin"></i>SENTIMIENTOS</a>
                            <ul>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                            </ul>
                        </div>
                        <div class="contenedor-Categoria-postales col s4 m12">
                            <a href="catalogo.php?id=1" class="titulo-categoria"><i class="fas fa-heart prefix colorLogin"></i>SENTIMIENTOS</a>
                            <ul>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                                <li><a href="#">Amor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- C O N T E N E D O R   P O S T A L E S  -->
                <div id="ejemplos-Postales" class="col s12 m9 white">
                    <div class="container">
                        <!-- Titulo y Descripcion -->
                        <div class="row">
                            <div class="col s12">
                                <?php
                                    $titulo = "";
                                    if (isset($_GET["id"])){
                                        $categoria = Categorias::leerCategorias("ID_categoria",$_GET["id"]);
                                        $titulo .= '<h5 class="titulo">'.$categoria["nombre_Categoria"].'</h5>';
                                        $titulo .= '<p class="descripcion">'.$categoria["descripcionCategoria"].'</p>';
                                    }else{
                                        echo '<h5 class="titulo">Selecciona una Categoria</h5>
                                        <p class="descripcion">Las categorias se encuentran en el costado izquierdo; por favor selecciona una categoria. </p>
                                    ';
                                    }
                                    echo $titulo;
                                ?>
                                </div>
                        </div>
                    </div>
                    <!-- Contedor de postales -->
                    <div class="row" id="todas-postales">
                        <div class="col s12 m6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/categorias/festividades.png">
                                  <span class="card-title">Card Title</span>
                                  <a class="btn-floating halfway-fab waves-effect waves-light cyan darken-1"><i class="material-icons">thumb_up</i></a>
                                </div>
                                <div class="card-content">
                                  <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action"><a href="#" class="blue-text">Enviar</a></div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/categorias/festividades.png">
                                  <span class="card-title">Card Title</span>
                                  <a class="btn-floating halfway-fab waves-effect waves-light cyan darken-1"><i class="material-icons">thumb_up</i></a>
                                </div>
                                <div class="card-content">
                                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action"><a href="#" class="blue-text">Enviar</a></div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card">
                                <div class="card-image">
                                  <img src="img/categorias/festividades.png">
                                  <span class="card-title">Card Title</span>
                                  <a class="btn-floating halfway-fab waves-effect waves-light cyan darken-1"><i class="material-icons">thumb_up</i></a>
                                </div>
                                <div class="card-content">
                                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action"><a href="#" class="blue-text">Enviar</a></div>
                            </div>
                        </div>
                    <!-- Fin Contedor de Postales -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include("footer.html");
    ?>

</body>
</html>