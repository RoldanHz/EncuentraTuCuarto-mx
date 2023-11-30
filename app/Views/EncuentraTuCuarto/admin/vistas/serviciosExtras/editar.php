<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Actualizar Servicio Extra</h2>
            <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $servicioExtra->id?>"/>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $servicioExtra->name?>">
                </div>

                <div class="mb-3">
                    <label for="typese" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="typese" name="typese" value="<?= $servicioExtra->typese?>">
                </div>

                <div class="mb-3">
                    <label for="owner" class="form-label">Propietario</label>
                    <input type="text" class="form-control" id="owner" name="owner" value="<?= $servicioExtra->owner?>">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $servicioExtra->phone?>">
                </div>

                <div class="mb-3">
                    <label for="street" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="street" name="street" value="<?= $servicioExtra->street?>">
                </div>

                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Barrio</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="<?= $servicioExtra->neighborhood?>">
                </div>

                <div class="mb-3">
                    <label for="hours" class="form-label">Horario</label>
                    <input type="text" class="form-control" id="hours" name="hours" value="<?= $servicioExtra->hours?>">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= $servicioExtra->price?>">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>
        </div>
    </div>
</div>
