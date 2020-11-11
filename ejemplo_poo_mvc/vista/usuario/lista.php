
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["usuarios"] as $usuario){ ?>
            <tr>
                <td><?= $usuario->getId() ?></td>
                <td><?= $usuario->getNombres() ?></td>
                <td><?= $usuario->getApellidos() ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
