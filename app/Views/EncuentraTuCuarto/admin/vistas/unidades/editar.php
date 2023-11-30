<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Actualizar Unidad</h2>
            <form action="<?= base_url('UnLugarDeMimos/admin/vistas/unidades/agregar'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $unidad->id?>"/>
                <div class="mb-3">
                    <label for="street" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="street" name="street" value="<?= $unidad->id?>">
                </div>

                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Barrio</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="<?= $unidad->neighborhood?>">
                </div>

                <div class="mb-3">
                    <label for="extra_services" class="form-label">Servicios Extra</label>
                    <input type="text" class="form-control" id="extra_services" name="extra_services" value="<?= $unidad->extra_services?>">
                </div>

                <div class="mb-3">
                    <label for="apartment" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="apartment" name="apartment" value="<?= $unidad->apartment?>">
                </div>

                <div class="mb-3">
                    <label for="floors" class="form-label">Pisos</label>
                    <input type="text" class="form-control" id="floors" name="floors" value="<?= $unidad->floors?>">
                </div>

                <div class="mb-3">
                    <label for="locality" class="form-label">Localidad</label>
                    <input type="text" class="form-control" id="locality" name="locality" value="<?= $unidad->locality?>">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>
        </div>
    </div>
</div>
