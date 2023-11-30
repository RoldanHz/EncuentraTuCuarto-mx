<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Principal extends BaseController
{
    public function inicio()
    {
        return
        view('EncuentraTuCuarto/admin/common/headadmin').
        view('EncuentraTuCuarto/admin/inicio').
        view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    public function descarga() {
        chdir('../../../../../mysql/bin');
        //chdir('C:\xampp\mysql\bin\mysqldump.exe');
        $command = 'mysqldump -u root Encuentratucuarto > "C:\Users\Rolda\Downloads\blog.sql"';
        
        //$command = 'mysqldump -u $db > "C:\Users\Rolda\Downloads\blog.sql"';
        exec($command);
            echo "Se ha realizado la exportación de la base de datos." . '<br>';
    }
}
