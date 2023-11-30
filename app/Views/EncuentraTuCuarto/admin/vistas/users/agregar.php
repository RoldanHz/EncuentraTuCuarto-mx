<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Agregar Usuario</h2>
            <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/users/agregar'); ?>" method="post">

                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="profile" class="form-label">Perfil</label>
                    <select class="form-control" id="profile" name="profile">
                        <option value="1">Administrador</option>
                        <option value="2">Arrendatario</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                </div>

            </form>
        </div>
    </div>
</div>
