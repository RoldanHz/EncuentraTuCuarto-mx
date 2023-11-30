<div>
    <div class="row">
        <div class="col-12">
            <h2> Usuarios</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/usuarios/agregar'); ?>"><i class="bi bi-building-add"></i> Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/usuarios/buscar'); ?>"><i class="bi bi-search-heart"></i> Buscar</a>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Número de Cuenta</th>
                    <th>Nombre del Banco</th>
                    <th>Tipo de Cuenta</th>
                    <th>Titular de la Cuenta</th>
                    <th>CVV</th>
                    <th>Mes de Caducidad</th>
                    <th>Año de Caducidad</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Foto</th>
                    <th>Biografía</th>
                    <th>RFC</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user->name ?></td>
                            <td><?= $user->lastname ?></td>
                            <td><?= $user->birthday ?></td>
                            <td><?= $user->account_number ?></td>
                            <td><?= $user->bank_name ?></td>
                            <td><?= $user->account_type ?></td>
                            <td><?= $user->account_holder ?></td>
                            <td><?= $user->cvv ?></td>
                            <td><?= $user->month_c ?></td>
                            <td><?= $user->year_c ?></td>
                            <td><?= $user->gender ?></td>
                            <td><?= $user->phone ?></td>
                            <td><?= $user->photo ?></td>
                            <td><?= $user->bio ?></td>
                            <td><?= $user->RFC ?></td>
                            <td><?= $user->email ?></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/usuarios/editar/' . $user->id); ?>"><i class="bi bi-pencil-square"></i> Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminarusuario/' . $user->id); ?>"><i class="bi bi-trash3"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>