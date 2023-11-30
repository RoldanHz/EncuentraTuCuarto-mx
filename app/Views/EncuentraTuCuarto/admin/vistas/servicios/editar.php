<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Actualizar Servicio</h2>
            <form action="<?= base_url('editservicio/'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $servicio->id?>"/>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="category" name="category" value="<?= $servicio->category?>">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <input class="form-control" id="description" name="description" value="<?= $servicio->description?>"></input>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>
        </div>
    </div>
</div>
