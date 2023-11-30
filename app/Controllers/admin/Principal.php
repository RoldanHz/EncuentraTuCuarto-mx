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
}
