<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Agregar Unidad</h2>
            <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/unidades/agregar'); ?>" method="post">

                <div class="mb-3">
                    <label for="street" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="street" name="street">
                </div>

                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Barrio</label>
                    <input type="text" class="form-control" id="neighborhood" name="neighborhood">
                </div>

                <div class="mb-3">
                    <label for="extra_services" class="form-label">Servicios Extra</label>
                    <input type="text" class="form-control" id="extra_services" name="extra_services">
                </div>

                <div class="mb-3">
                    <label for="apartment" class="form-label">Departamento</label>
                    <input type="text" class="form-control" id="apartment" name="apartment">
                </div>

                <div class="mb-3">
                    <label for="floors" class="form-label">Pisos</label>
                    <input type="text" class="form-control" id="floors" name="floors">
                </div>

                <div class="mb-3">
                    <label for="locality" class="form-label">Localidad</label>
                    <input type="text" class="form-control" id="locality" name="locality">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Agregar Unidad</button>
                </div>

            </form>
        </div>
    </div>
</div>
