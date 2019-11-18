<?php 
    include ("header.html");
?>
    <main class="colorFondoMain valign-wrapper">
        <div class="container section">
            <!-- S L I D E R  -->
            <div class="row">
                <div class="col s12">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img class="responsive-img" src="img/1535146937-torta-cumpleaos-istock.jpg">
                                <div class="caption center-align">
                                    <h3>This is our big Tagline!</h3>
                                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                                </div>
                            </li>
                            <li>
                                <img class="responsive-img" src="img/amor.jpg">
                                <div class="caption left-align">
                                    <h3>Left Aligned Caption</h3>
                                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                                </div>
                            </li>
                            <li>
                                <img class="responsive-img" src="img/cabecera-web-bus-navidad-11.png">
                                <div class="caption right-align">
                                    <h3>Right Aligned Caption</h3>
                                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- C A T E G O R I A S -->
            <div id="contenedorCategorias" class="borde">
                <h2>Todas las categorias</h2>
                <div class="row">
                    <div id="sentimientos" class="elemento-categoria col s12 l4">
                        <a href="categorias.php?id=''" class="titulo-elemento-categoria">Sentimientos / Emociones</a>
                    </div>
                    <div id="festividades" class="elemento-categoria col s12 l4">
                        <a href="categorias.php?id=''" class="titulo-elemento-categoria">Festividades</a>
                    </div>
                    <div id="invitaciones" class="elemento-categoria col s12 l4">
                        <a href="categorias.php?id=''" class="titulo-elemento-categoria">Invitaciones</a>
                    </div>
                </div>
                <div class="row">
                    <div id="cumpleanos" class="elemento-categoria col s12 l4">
                        <a href="categorias.php?id=''" class="titulo-elemento-categoria">Cumpleaños</a>
                    </div>
                    <div id="variadas" class="elemento-categoria col s12 l4">
                        <a href="categorias.php?id=''" class="titulo-elemento-categoria">Variadas</a>
                    </div>
                </div>
                <a href="catalogo.php" id="ver-catalogo" class="waves-effect waves-light btn blue">Ver Categorias</a>
            </div>
        </div>
    </main>
    <?php
        include ("footer.html");
    ?>

</body>

</html>