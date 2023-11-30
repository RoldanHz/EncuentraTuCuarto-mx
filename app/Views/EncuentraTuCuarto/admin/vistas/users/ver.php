<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Usuarios</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/users/agregar'); ?>"><i class="bi bi-building-add"></i>  Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/users/buscar'); ?>"><i class="bi bi-search-heart"></i>  Buscar</a>
            <table class="table">
                <thead>
                    <th>Nombre de Usuario</th>
                    <th>Contraseña</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario->username ?></td>
                            <td><?= $usuario->password ?></td>
                            <td><?= $usuario->profile ?></td>
                            <td>
                            <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/users/editar/' . $usuario->id); ?>"><i class="bi bi-pencil-square"></i>  Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminaruser/' . $usuario->id); ?>"><i class="bi bi-trash3"></i>  Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
