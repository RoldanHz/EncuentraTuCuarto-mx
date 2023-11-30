<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Agregar Servicio Extra</h2>
            <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar'); ?>" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="typese" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="typese" name="typese" required>
                </div>

                <div class="mb-3">
                    <label for="owner" class="form-label">Propietario</label>
                    <input type="text" class="form-control" id="owner" name="owner" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="street" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                </div>

                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Barrio</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
                </div>

                <div class="mb-3">
                    <label for="hours" class="form-label">Horario</label>
                    <input type="text" class="form-control" id="hours" name="hours" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>

                <!-- Agrega los demás campos según sea necesario -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Agregar Servicio Extra</button>
                </div>

            </form>
        </div>
    </div>
</div>
