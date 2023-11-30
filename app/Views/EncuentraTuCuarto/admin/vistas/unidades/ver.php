<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Unidades</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/agregar'); ?>"><i class="bi bi-building-add"></i>  Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/buscar'); ?>"><i class="bi bi-search-heart"></i>  Buscar</a>
            <table class="table">
                <thead>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Servicio Extra</th>
                    <th>Apartamentos</th>
                    <th>Pisos</th>
                    <th>Localidad</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($unidades as $unidad) : ?>
                        <tr>
                            <td><?= $unidad->street ?></td>
                            <td><?= $unidad->neighborhood ?></td>
                            <td><?= $unidad->extra_services ?></td>
                            <td><?= $unidad->apartment ?></td>
                            <td><?= $unidad->floors ?></td>
                            <td><?= $unidad->locality ?></td>
                            <td>
                                <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/editar/' . $unidad->id); ?>"><i class="bi bi-pencil-square"></i>  Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminarunidad/' . $unidad->id); ?>"><i class="bi bi-trash3"></i>  Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>