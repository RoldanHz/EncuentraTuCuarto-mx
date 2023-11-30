<div class="container1">
    <?php
    if (isset($validation)) {
        print $validation->ListErrors();
    }
    ?>
    <h1>Formulario de Datos del Usuario</h1>

    <form action="<?= base_url('EncuentraTuCuarto/admin/vistas/usuarios/agregar'); ?>" method="post">

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="lastname">Apellido:</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>

        <div class="form-group">
            <label for="birthday">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>

        <div class="form-group">
            <label for="account_number">Número de Cuenta:</label>
            <input type="text" class="form-control" id="account_number" name="account_number">
        </div>

        <div class="form-group">
            <label for="bank_name">Nombre del Banco:</label>
            <input type="text" class="form-control" id="bank_name" name="bank_name">
        </div>

        <div class="form-group">
            <label for="account_type">Tipo de Cuenta:</label>
            <input type="text" class="form-control" id="account_type" name="account_type">
        </div>

        <div class="form-group">
            <label for="account_holder">Titular de la Cuenta:</label>
            <input type="text" class="form-control" id="account_holder" name="account_holder">
        </div>

        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="number" class="form-control" id="cvv" name="cvv">
        </div>

        <div class="form-group">
            <label for="month_c">Mes de Caducidad:</label>
            <input type="number" class="form-control" id="month_c" name="month_c">
        </div>

        <div class="form-group">
            <label for="year_c">Año de Caducidad:</label>
            <input type="number" class="form-control" id="year_c" name="year_c">
        </div>

        <div class="form-group">
            <label for="gender">Género:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="tel" class="form-control" id="phone">
        </div>

        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="text" class="form-control" id="photo">
        </div>

        <div class="form-group">
            <label for="bio">Descripción:</label>
            <textarea class="form-control" id="bio" name="bio"></textarea>
        </div>

        <div class="form-group">
            <label for="RFC">RFC:</label>
            <input type="text" class="form-control" id="RFC" name="RFC">
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Enviar</button>

    </form>
</div>