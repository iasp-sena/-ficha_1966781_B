
    <div class="row">
        <form class="col s12" action="<?= CONTEXT_APP . '/index.php' ?>" method="GET">
            <input type="hidden" name="controller" value="UsuarioController" />
            <input type="hidden" name="method" value="registrar" />
            <div class="row">
                <div class="input-field col s12">
                <input id="nombres" name="nombres" type="text" class="validate">
                <label for="nombres">Nombres</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="apellidos" name="apellidos" type="text" class="validate">
                <label for="apellidos">Apellidos</label>
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