<?php

namespace App\Controllers;

class Arren extends BaseController
{
    public function inicio()
    {
        return
        view('EncuentraTuCuarto/arrendatario/common/headarren').
        view('EncuentraTuCuarto/arrendatario/inicio').
        view('EncuentraTuCuarto/arrendatario/common/footerarren');

    }
}
