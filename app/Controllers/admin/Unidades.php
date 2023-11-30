<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Unidades extends BaseController
{
    public function ver()
    {

        $unidades = model("UnidadesModel");
        $data['unidades'] = $unidades->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/unidades/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    public function agregar()
    {
        $unidades = model("UnidadesModel");
        $data['unidades'] = $unidades->findAll();
        $data['title'] = "Agregar Cliente";
        $validation = \Config\Services::validation();
        if (strtolower($this->request->getMethod()) === 'get') {
            //insertamos
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/unidades/agregar') .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        }

        $rules = [
            'street' => 'required|max_length[40]',
            'neighborhood' => 'required',
            'extra_services' => 'required|max_length[40]',
            'apartment' => 'required|max_length[40]',
            'floors' => 'required|max_length[40]',
            'locality' => 'required|max_length[40]'
        ];
        if (!$this->validate($rules)) {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/unidades/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertar()) {
                return redirect('EncuentraTuCuarto/admin/vistas/unidades/ver');
            }
        }
    }

    public function insertar()
    {
        $unidadModel = model("UnidadesModel");
        $data = [
            "street" => $_POST["street"],
            "neighborhood" => $_POST["neighborhood"],
            "extra_Services" => $_POST["extra_services"],
            "apartment" => $_POST["apartment"],
            "floors" => $_POST["floors"],
            "locality" => $_POST["locality"]
        ];
        $unidadModel->insert($data, false);
        return true;
    }


    // Continuación del código

    public function editar($id)
    {
        $unidadModel = model("UnidadesModel");
        $data['unidad'] = $unidadModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/unidades/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function buscar()
    {
        $unidadModel = model('UnidadesModel');
        if ($this->request->getGet('street')) {
            $street = $this->request->getGet('street');
            $neighborhood = $this->request->getGet('neighborhood');
            $extra_services = $this->request->getGet('extra_services');
            $apartment = $this->request->getGet('apartment');
            $floors = $this->request->getGet('floors');
            $locality = $this->request->getGet('locality');
            $data['unidades'] = $unidadModel
                ->like('street', $street)
                ->like('neighborhood', $neighborhood)
                ->like('extra_services', $extra_services)
                ->like('apartment', $apartment)
                ->like('floors', $floors)
                ->like('locality', $locality)
                ->findAll();
        } else {
            $street = "";
            $data['unidades'] = $unidadModel->findAll();
        }

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/unidades/buscar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function eliminar($id)
    {
        $unidadModel = model('UnidadesModel');
        $unidadModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/unidades/ver');
    }

    public function actualizar()
    {
        $unidadModel = model('UnidadesModel');
        $data = [
            "street" => $this->request->getPost('street'),
            "neighborhood" => $this->request->getPost('neighborhood'),
            "extra_services" => $this->request->getPost('extra_services'),
            "apartment" => $this->request->getPost('apartment'),
            "floors" => $this->request->getPost('floors'),
            "locality" => $this->request->getPost('locality'),
        ];
        $unidadModel->update($this->request->getPost('id'), $data);
        return redirect('EncuentraTuCuarto/admin/vistas/unidades/ver');
    }
}
