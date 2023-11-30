<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Extraservices extends BaseController
{
    public function index()
    {
        //
    }
    public function ver()
    {
        $servicioExtraModel = model("ExtraServicesModel");
        $data['serviciosExtras'] = $servicioExtraModel->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function agregar()
    {
        $data['title'] = "Agregar Servicio Extra";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar') .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        }

        $rules = [
            'name' => 'required|max_length[100]',
            'typese' => 'required|integer',
            'owner' => 'required|max_length[100]',
            'phone' => 'required|max_length[15]',
            'street' => 'required|max_length[100]',
            'neighborhood' => 'required|max_length[100]',
            'hours' => 'required|max_length[100]',
            'price' => 'required|max_length[50]',
        ];

        if (!$this->validate($rules)) {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/serviciosExtras/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarServicioExtra()) {
                return redirect('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver');
            }
        }
    }

    public function insertarServicioExtra()
    {
        $servicioExtraModel = model("ExtraServicesModel");
        $data = [
            "name" => $this->request->getPost("name"),
            "typese" => $this->request->getPost("typese"),
            "owner" => $this->request->getPost("owner"),
            "phone" => $this->request->getPost("phone"),
            "street" => $this->request->getPost("street"),
            "neighborhood" => $this->request->getPost("neighborhood"),
            "hours" => $this->request->getPost("hours"),
            "price" => $this->request->getPost("price"),
        ];
        $servicioExtraModel->insert($data, false);
        return true;
    }
    public function editar($id)
    {
        $servicioExtraModel = model("ExtraServicesModel");
        $data['servicioExtra'] = $servicioExtraModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/serviciosExtras/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function buscar()
    {
        $servicioExtraModel = model('ExtraServicesModel');
        if ($this->request->getGet('name')) {
            $name = $this->request->getGet('name');
            $typese = $this->request->getGet('typese');
            $owner = $this->request->getGet('owner');
            $phone = $this->request->getGet('phone');
            $street = $this->request->getGet('street');
            $neighborhood = $this->request->getGet('neighborhood');
            $hours = $this->request->getGet('hours');
            $price = $this->request->getGet('price');
            $data['serviciosExtras'] = $servicioExtraModel
                ->like('name', $name)
                ->like('typese', $typese)
                ->like('owner', $owner)
                ->like('phone', $phone)
                ->like('street', $street)
                ->like('neighborhood', $neighborhood)
                ->like('hours', $hours)
                ->like('price', $price)
                ->findAll();
        } else {
            $name = "";
            $data['serviciosExtras'] = $servicioExtraModel->findAll();
        }

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/serviciosExtras/buscar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function eliminar($id)
    {
        $servicioExtraModel = model('ExtraServicesModel');
        $servicioExtraModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver');
    }

    public function actualizar()
    {
        $servicioExtraModel = model('ExtraServicesModel');
        $data = [
            "name" => $this->request->getPost('name'),
            "typese" => $this->request->getPost('typese'),
            "owner" => $this->request->getPost('owner'),
            "phone" => $this->request->getPost('phone'),
            "street" => $this->request->getPost('street'),
            "neighborhood" => $this->request->getPost('neighborhood'),
            "hours" => $this->request->getPost('hours'),
            "price" => $this->request->getPost('price'),
        ];
        $servicioExtraModel->update($_POST['id'], $data);
        return redirect('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver');
    }
}
