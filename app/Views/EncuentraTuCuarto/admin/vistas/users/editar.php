<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Actualizar Usuario</h2>
            <form action="<?= base_url('edituser'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $usuarios->id?>"/>

                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $usuarios->username ?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= $usuarios->username ?>">
                </div>
                <div class="form-group">
                    <label for="profile">Perfil:</label>
                    <select name="profile" id="profile" class="form-control">
                        <?php if ($usuarios->profile == "1") : ?>
                            <option value="1" selected>Administrador</option>
                            <option value="2">Arrendatario</option>
                        <?php else : ?>
                            <option value="1">Administrador</option>
                            <option value="2" selected>Arrendatario</option>
                        <?php endif ?>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>

            </form>
        </div>
    </div>
</div>