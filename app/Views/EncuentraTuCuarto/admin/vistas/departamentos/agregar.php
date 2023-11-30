<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Agregar Departamento</h2>
            <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/departamentos/agregar'); ?>" method="post">

                <div class="mb-3">
                    <label for="rooms" class="form-label">Cuartos</label>
                    <input type="text" class="form-control" id="rooms" name="rooms">
                </div>

                <div class="mb-3">
                    <label for="bathrooms" class="form-label">Baños</label>
                    <input type="text" class="form-control" id="bathrooms" name="bathrooms">
                </div>

                <div class="mb-3">
                    <label for="floor_p" class="form-label">N. de Piso</label>
                    <input type="text" class="form-control" id="floor_p" name="floor_p">
                </div>

                <div class="mb-3">
                    <label for="tenant" class="form-label">Arrendatario</label>
                    <input type="text" class="form-control" id="tenant" name="tenant">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Agregar Departamento</button>
                </div>

            </form>
        </div>
    </div>
</div>
