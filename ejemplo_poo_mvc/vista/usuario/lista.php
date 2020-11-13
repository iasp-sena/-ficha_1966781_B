
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TD</th>
                <th>NÚMERO DOCUMENTO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>NOMBRE USUARIO</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["usuarios"] as $usuario){ ?>
            <tr>
                <td><?= $usuario->getId() ?></td>
                <td><?= $usuario->getTipoDocumento()->getCodigo() ?></td>
                <td><?= $usuario->getNumeroDocumento() ?></td>
                <td><?= $usuario->getNombres() ?></td>
                <td><?= $usuario->getApellidos() ?></td>
                <td><?= $usuario->getNombreUsuario() ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
