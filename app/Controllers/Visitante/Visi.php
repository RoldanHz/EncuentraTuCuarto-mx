<?php

namespace App\Controllers\Visitante;

use App\Controllers\BaseController;
class Visi extends BaseController
{
    public function inicio()
    {
        return
        view('EncuentraTuCuarto/visitante/common/headvisi').
        view('EncuentraTuCuarto/visitante/inicio').
        view('EncuentraTuCuarto/visitante/common/footervisi');

    }
}
