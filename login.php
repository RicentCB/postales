<?php
    include ("header.html");
?>
    <main class="colorFondoMain valign-wrapper">
        <div class="container">
            <form autocomplete="off">
                <div class="row">
                    <div class="col s12 l12 input-field">
                        <i class="fas fa-user prefix colorLogin"></i>
                        <label for="correo">Correo:</label>
                        <input type="text" id="correo" name="correo" data-validetta="required,email">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12 input-field">
                        <i class="fas fa-lock prefix colorLogin"></i>
                        <label for="contrasena">Contrase&ntilde;a:</label>
                        <input type="password" id="contrasena" name="contrasena" data-validetta="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12 input-field">
                        <button type="submit" class="btn blue lighten-4" style="width:100%;">Entrar</button>
                    </div>
                </div>
                <div class="center">
                    <a class="grey-text"href="registro.html">Registrarse</a>
                </div>
            </form>

        </div>
    </main>
    <?php
        include ("footer.html");
    ?>
    
</body>
</html>