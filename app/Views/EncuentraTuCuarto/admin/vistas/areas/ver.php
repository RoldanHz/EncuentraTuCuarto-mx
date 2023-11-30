<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Areas</h2>
            <a type="button" class="btn btn-success btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/agregar'); ?>"><i class="bi bi-building-add"></i> Añadir</a>
            <a type="button" class="btn btn-dark btn-lg" href="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/buscar'); ?>"><i class="bi bi-search-heart"></i> Buscar</a>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($areas as $area) : ?>
                        <tr>
                            <td>
                                <?= $area->unit ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <!-- Iterar a través de los elementos con un bucle foreach -->
        <?php foreach ($areas as $area) : ?>
            <!-- Colocar cada tarjeta en una columna de tamaño 2 (5 tarjetas por fila) -->
            <div class="col-md-2 mb-4">
                <div class="card">
                    <!-- Contenido de la tarjeta -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $area->id ?></h5>
                        <p class="card-text"><?= $area->unit ?></p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Clientes</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <form action="<?= base_url('UnLugarDeMimos/admin/vistas/clientes/agregar'); ?>" method="POST">
                                                <?= csrf_field() ?>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre</label>
                                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Dirección</label>
                                                    <input type="text" class="form-control" name="direccion" id="direccion">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Teléfono</label>
                                                    <input type="text" class="form-control" name="telefono" id="telefono">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Correo Electrónico</label>
                                                    <input type="text" class="form-control" name="correo" id="correo">
                                                </div>


                                                <div class="mb-3">
                                                    <input type="submit" class="btn  btn-success">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>