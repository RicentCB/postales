<?php
    include ("header.html");
?>
    <main class="colorFondoMain valign-wrapper">
        <div class="container">
            <form autocomplete="off">
                <div class="row">
                    <div class="col s12 l6 input-field">
                        <i class="far fa-id-card prefix colorLogin"></i>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" data-validetta="required">
                    </div>
                    <div class="col s12 l6 input-field">
                        <i class="far fa-id-card prefix colorLogin"></i>
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" data-validetta="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l12 input-field" >
                        <i class="fas fa-envelope prefix colorLogin"></i>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" data-validetta="required,email">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4 input-field">
                        <i class="fas fa-lock prefix colorLogin"></i>
                        <label for="contrasena">Contrase&ntilde;a:</label>
                        <input type="password" id="contasena" name="contrasena" data-validetta="required,minlength[6],maxLength[16]">
                    </div>
                    <div class="col s12 l4 input-field">
                        <i class="fas fa-lock prefix colorLogin"></i>
                        <label for="veContrasena">Verificar Contrase&ntilde;a:</label>
                        <input type="password" id="veContasena" name="veContrasena" data-validetta="required,minlength[6],maxLength[16]">
                    </div>
                    <div class="col s12 l4 input-field">
                        <i class="fas fa-birthday-cake prefix colorLogin"></i>
                        <label for="fecha">dd/mm/aaaa</label>
                        <input type="text" class="datepicker" id="fecha" name="fecha" data-validetta="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l6 input-field">
                            <i class="fas fa-venus-mars prefix colorLogin"></i>
                            <select>
                                <option value="" disabled selected>Seleciona un genero</option>
                                <option value="1">Femenino</option>
                                <option value="2">Maculino</option>
                                <option value="3">No binario</option>
                            </select>
                            <label>Genero</label>
                    </div>
                    <div class="col s12 l6 input-field">
                            <i class="fab fa-font-awesome-flag prefix colorLogin"></i>
                            <select>
                                <option value="" disabled selected>Seleciona una nacionalidad</option>
                                <option value="1">Femenino</option>
                                <option value="2">Maculino</option>
                                <option value="3">No binario</option>
                            </select>
                            <label>Nacionalida</label>
                    </div>
                    <div class="row">
                        <div class="col s12 l12 input-field">
                            <button type="submit" class="btn blue lighten-4" style="width:100%;">Registrarse</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php
        include ("footer.html");
    ?>
    
</body>
</html>