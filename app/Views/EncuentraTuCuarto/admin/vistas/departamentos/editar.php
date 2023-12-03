<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Actualizar Departamento</h2>
            <form action="<?= base_url('editdepartamento/'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $departamentos->id?>"/>
                <div class="mb-3">
                    <label for="rooms" class="form-label">Cuartos</label>
                    <input type="text" class="form-control" id="rooms" name="rooms" value="<?= $departamentos->rooms ?>">
                </div>

                <div class="mb-3">
                    <label for="bathrooms" class="form-label">Baños</label>
                    <input type="text" class="form-control" id="bathrooms" name="bathrooms" value="<?= $departamentos->bathrooms ?>">
                </div>

                <div class="mb-3">
                    <label for="floor_p" class="form-label">N. de Piso</label>
                    <input type="text" class="form-control" id="floor_p" name="floor_p" value="<?= $departamentos->floor_p ?>">
                </div>

                <div class="mb-3">
                    <label for="tenant" class="form-label">Arrendatario</label>
                    <input type="text" class="form-control" id="tenant" name="tenant" value="<?= $departamentos->tenant ?>">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="text" class="form-control" id="image" name="image" value="<?= $departamentos->image ?>">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>
        </div>
    </div>
</div>
