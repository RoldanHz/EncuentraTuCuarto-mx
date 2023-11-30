<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Servicios</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/servicios/agregar'); ?>"><i class="bi bi-building-add"></i> Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/servicios/buscar'); ?>"><i class="bi bi-search-heart"></i> Buscar</a>
            <table class="table">
                <thead>
                    <th>Categoria</th>
                    <th>Descripción</th>
                </thead>
                <tbody>
                <?php foreach ($servicios as $servicio): ?>
                    <tr>
                        <td><?= $servicio->category?></td>
                        <td><?= $servicio->description?></td>
                        <td>
                                <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/servicios/editar/' . $servicio->id); ?>"><i class="bi bi-pencil-square"></i> Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminarservicio/' . $servicio->id); ?>"><i class="bi bi-trash3"></i> Eliminar</a>
                            </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
