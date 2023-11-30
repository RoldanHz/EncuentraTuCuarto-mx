<div class="container1">
    <h1>Actualizar Usuario</h1>

    <form action="<?= base_url('editusuario/');?>" method="post">
    <input type="hidden" name="id" value="<?= $users->id?>"/>
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $users->name?>">
        </div>

        <div class="form-group">
            <label for="lastname">Apellido:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $users->lastname?>">
        </div>

        <div class="form-group">
            <label for="birthday">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?= $users->birthday?>">
        </div>

        <div class="form-group">
            <label for="account_number">Número de Cuenta:</label>
            <input type="text" class="form-control" id="account_number" name="account_number" value="<?= $users->account_number?>" >
        </div>

        <div class="form-group">
            <label for="bank_name">Nombre del Banco:</label>
            <input type="text" class="form-control" id="bank_name" name="bank_name" value="<?= $users->bank_name?>" >
        </div>

        <div class="form-group">
            <label for="account_type">Tipo de Cuenta:</label>
            <input type="text" class="form-control" id="account_type" name="account_type" value="<?= $users->account_type?>">
        </div>

        <div class="form-group">
            <label for="account_holder">Titular de la Cuenta:</label>
            <input type="text" class="form-control" id="account_holder" name="account_holder" value="<?= $users->account_holder?>" >
        </div>

        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="number" class="form-control" id="cvv" name="cvv" value="<?= $users->cvv?>">
        </div>

        <div class="form-group">
            <label for="month_c">Mes de Caducidad:</label>
            <input type="number" class="form-control" id="month_c" name="month_c" value="<?= $users->month_c?>" >
        </div>

        <div class="form-group">
            <label for="year_c">Año de Caducidad:</label>
            <input type="number" class="form-control" id="year_c" name="year_c" value="<?= $users->year_c?>">
        </div>

        <div class="form-group">
            <label for="gender">Género:</label>
            <select name="gender" id="gender" class="form-control">
                        <?php if($users->gender == "M"): ?>
                            <option value="M" selected>M</option>
                            <option value="F" >M</option>
                        <?php else: ?>
                            <option value="M">M</option>
                            <option value="F" selected>F</option>
                        <?php endif ?>
                    </select>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= $users->phone?>">
        </div>

        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="text" class="form-control" id="photo" name="photo" value="<?= $users->photo?>">
        </div>

        <div class="form-group">
            <label for="bio">Descripción:</label>
            <input class="form-control" id="bio" name="bio" value="<?= $users->bio?>"></input>
        </div>

        <div class="form-group">
            <label for="RFC">RFC:</label>
            <input type="text" class="form-control" id="RFC" name="RFC" value="<?= $users->RFC?>" >
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $users->email?>">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>

    </form>
</div>