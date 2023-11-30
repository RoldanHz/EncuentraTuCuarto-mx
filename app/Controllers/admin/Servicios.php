<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Servicios extends BaseController
{
    public function ver()
    {

        $servis = model("ServiciosModel");
        $data['servicios'] = $servis->findAll();
        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/servicios/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    public function agregar()
    {
        $data['title'] = "Agregar Servicio";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/servicios/agregar') .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        }

        $rules = [
            'category' => 'required|max_length[50]',
            'description' => 'max_length[255]',
        ];

        if (!$this->validate($rules)) {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/servicios/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarServicio()) {
                return redirect('EncuentraTuCuarto/admin/vistas/servicios/ver');
            }
        }
    }

    public function insertarServicio()
    {
        $servicioModel = model("ServiciosModel");
        $data = [
            "category" => $this->request->getPost("category"),
            "description" => $this->request->getPost("description"),
        ];
        $servicioModel->insert($data, false);
        return true;
    }
    public function editar($id)
    {
        $servicioModel = model("ServiciosModel");
        $data['servicio'] = $servicioModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/servicios/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function buscar()
    {
        $servicioModel = model('ServiciosModel');
        if ($this->request->getGet('category')) {
            $category = $this->request->getGet('category');
            $description = $this->request->getGet('description');
            $data['servicios'] = $servicioModel
                ->like('category', $category)
                ->like('description', $description)
                ->findAll();
        } else {
            $category = "";
            $data['servicios'] = $servicioModel->findAll();
        }

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/servicios/buscar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function eliminar($id)
    {
        $servicioModel = model('ServiciosModel');
        $servicioModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/servicios/ver');
    }

    public function actualizar()
    {
        $servicioModel = model('ServiciosModel');
        $data = [
            "category" => $this->request->getPost('category'),
            "description" => $this->request->getPost('description'),
        ];
        $servicioModel->update($this->request->getPost('id'), $data);
        return redirect('EncuentraTuCuarto/admin/vistas/servicios/ver');
    }
}
