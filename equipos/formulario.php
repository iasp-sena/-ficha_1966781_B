
<form method="post" action="<?= CONTEXT_APP . "/guardar_jugador.php" ?>">
    <div>
        <label for="numero">Número</label>
        <input type="number" id="numero" name="numero" />
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" />
    </div>
    <div>
        <label for="posicion">Posición</label>
        <input type="text" id="posicion" name="posicion" />
    </div>
    <div>
        <button id="btnEnviar" name="btnEnviar" value="registrar">Enviar</button>
    </div>
</form>
