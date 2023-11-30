<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Servicios Extras</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar'); ?>"><i class="bi bi-building-add"></i>  Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/ServiciosExtras/buscar'); ?>"><i class="bi bi-search-heart"></i>  Buscar</a>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Propietario</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                    <th>Barrio</th>
                    <th>Horario</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($serviciosExtras as $servicioExtra) : ?>
                        <tr>
                            <td><?= $servicioExtra->name ?></td>
                            <td><?= $servicioExtra->typese ?></td>
                            <td><?= $servicioExtra->owner ?></td>
                            <td><?= $servicioExtra->phone ?></td>
                            <td><?= $servicioExtra->street ?></td>
                            <td><?= $servicioExtra->neighborhood ?></td>
                            <td><?= $servicioExtra->hours ?></td>
                            <td><?= $servicioExtra->price ?></td>
                            <td>
                            <a type="button" class="btn btn-warning" href="<?= base_url('EncuentraTuCuarto/admin/vistas/serviciosExtras/editar/' . $servicioExtra->id); ?>"><i class="bi bi-pencil-square"></i>  Actualizar</a>
                                <a type="button" class="btn btn-danger" href="<?= base_url('eliminarextraservicio/' . $servicioExtra->id); ?>"><i class="bi bi-trash3"></i>  Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
