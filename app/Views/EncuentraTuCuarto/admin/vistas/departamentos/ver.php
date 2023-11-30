<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Departamentos</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/agregar'); ?>"><i class="bi bi-building-add"></i> Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/buscar'); ?>"><i class="bi bi-search-heart"></i> Buscar</a>
            <table class="table">
                <thead>
                    <th>Cuartos</th>
                    <th>Baños</th>
                    <th>N. de Piso</th>
                    <th>Arrendatario</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($departamentos as $departamento) : ?>
                        <tr>
                            <td><?= $departamento->rooms ?></td>
                            <td><?= $departamento->bathrooms ?></td>
                            <td><?= $departamento->floor_p ?></td>
                            <td><?= $departamento->tenant ?></td>
                            <td><?= $departamento->image ?></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/editar/' . $departamento->id); ?>"><i class="bi bi-pencil-square"></i> Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminarunidad/' . $departamento->id); ?>"><i class="bi bi-trash3"></i> Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>