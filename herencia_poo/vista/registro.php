<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="../controlador/registrar_usuario.php" method="post">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre"/>
        </div>
        <div>
            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="apellidos"/>
        </div>
        <div>
            <label for="perfil">Perfil: </label>
            <select name="perfil">
                <option value="">Selecciones un perfil...</option>
                <option value="AP">Aprendiz</option>
                <option value="INS">Instructor</option>
            </select>
        </div>
        <div>
            <button type="submit" value="btnRegistrar">Registrar</button>
        </div>
    </form>
    <a href="tabla_usuarios.php">Ver usuarios...</a>
</body>
</html>