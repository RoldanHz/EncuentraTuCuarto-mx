<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return
        view('EncuentraTuCuarto/common/head').
        view('EncuentraTuCuarto/login').
        view('EncuentraTuCuarto/common/footer');
    }
}
