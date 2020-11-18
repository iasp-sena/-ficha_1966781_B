
    <div class="row">
        <form class="col s12" action="<?= getUrlControllerMethod('Login','ingresar') ?>" method="POST">
            <div class="row">
                <div class="input-field col s6">
                    <input id="usuario" name="usuario" type="text" class="validate">
                    <label for="usuario">Usuario</label>
                </div>
                <div class="input-field col s6">
                    <input id="clave" name="clave" type="password" class="validate">
                    <label for="clave">Clave</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="waves-effect waves-light btn">
                        <i class="material-icons right">send</i>Ingresar
                    </button>
                </div>
            </div>
        </form>
    </div> 