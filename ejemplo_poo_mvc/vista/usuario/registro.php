
    <div class="row">
        <form class="col s12" action="<?= CONTEXT_APP . '/index.php' ?>" method="GET">
            <input type="hidden" name="controller" value="Usuario" />
            <input type="hidden" name="method" value="registrar" />
            <div class="row">
                <div class="input-field col s6">
                    <select name="tipoDocumento">
                        <option value="" disabled selected>Seleccione una opción...</option>
                        <?php foreach($data["tiposDocumentos"] as $td) { ?>
                        <option value="<?= $td->getId() ?>"><?= $td->getDescripcion() ?></option>
                        <?php } ?>
                    </select>
                    <label>Tipo de documento</label>
                </div>
                <div class="input-field col s6">
                    <input id="numeroDocumento" name="numeroDocumento" type="number" class="validate">
                    <label for="numeroDocumento">Número documento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="nombres" name="nombres" type="text" class="validate">
                    <label for="nombres">Nombres</label>
                </div>
                <div class="input-field col s6">
                    <input id="apellidos" name="apellidos" type="text" class="validate">
                    <label for="apellidos">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="nombreUsuario" name="nombreUsuario" type="text" class="validate">
                    <label for="nombreUsuario">Nombre de usuario</label>
                </div>
                <div class="input-field col s6">
                    <input id="clave" name="clave" type="password" class="validate">
                    <label for="clave">Clave</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">
                        <i class="material-icons right">save</i>Guardar
                    </button>
                </div>
            </div>
        </form>
    </div> 