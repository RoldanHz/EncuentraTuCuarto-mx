<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Departamentos extends BaseController
{
    public function ver()  {
        $apartmentModel = model("ApartamentosModel");
        $data['departamentos'] = $apartmentModel->findAll();
    
        return
        view('EncuentraTuCuarto/admin/common/headadmin'). 
        view('EncuentraTuCuarto/admin/vistas/departamentos/ver', $data). 
        view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    
    public function agregar()  {
        $data['title'] = "Agregar Apartamento";
        $validation = \Config\Services::validation();
    
        if (strtolower($this->request->getMethod()) === 'get') {
            return
            view('EncuentraTuCuarto/admin/common/headadmin', $data).        
            view('EncuentraTuCuarto/admin/vistas/departamentos/agregar').
            view('EncuentraTuCuarto/admin/common/footeradmin');
        }
    
        $rules = [
            'rooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'floor_p' => 'required|numeric',
            'tenant' => 'required|numeric',
            'image' => 'max_length[250]',
        ];
    
        if (!$this->validate($rules)) {
            return 
            view('EncuentraTuCuarto/admin/common/headadmin', $data).     
            view('EncuentraTuCuarto/admin/vistas/departamentos/agregar', ['validation' => $validation]).
            view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarApartamento()) {
                return redirect('EncuentraTuCuarto/admin/vistas/departamentos/ver');
            }
        }
    }
    
    public function insertarApartamento() { 
        $apartmentModel = model("ApartamentosModel");
        $data = [
            "rooms" => $this->request->getPost("rooms"),
            "bathrooms" => $this->request->getPost("bathrooms"),
            "floor_p" => $this->request->getPost("floor_p"),
            "tenant" => $this->request->getPost("tenant"),
            "image" => $this->request->getPost("image"),
        ];
        $apartmentModel->insert($data, false);
        return true;
    }
    
    public function editar($id)  {
        $apartmentModel = model("ApartamentosModel");
        $data['departamentos'] = $apartmentModel->find($id);
    
        return
        view('EncuentraTuCuarto/admin/common/headadmin').        
        view('EncuentraTuCuarto/admin/vistas/departamentos/editar', $data).
        view('EncuentraTuCuarto/admin/common/footeradmin');  
    }
    
    public function buscar() {
        $apartmentModel = model('ApartamentosModel');
        if ($this->request->getGet('rooms')) {
            $rooms = $this->request->getGet('rooms');
            $bathrooms = $this->request->getGet('bathrooms');
            $floor_p = $this->request->getGet('floor_p');
            $tenant = $this->request->getGet('tenant');
            $data['departamentos'] = $apartmentModel
                ->like('rooms', $rooms)
                ->like('bathrooms', $bathrooms)
                ->like('floor_p', $floor_p)
                ->like('tenant', $tenant)
                ->findAll();
        } else {
            $rooms = "";
            $data['departamentos'] = $apartmentModel->findAll();
        }
    
        return
        view('EncuentraTuCuarto/admin/common/headadmin').
        view('EncuentraTuCuarto/admin/vistas/departamentos/buscar', $data).
        view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    
    public function eliminar($id) {
        $apartmentModel = model('ApartamentosModel');
        $apartmentModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/departamentos/ver');
    }
    
    public function actualizar() {
        $apartmentModel = model('ApartamentosModel');
        $data = array(
            "rooms" => $this->request->getPost('rooms'),
            "bathrooms" => $this->request->getPost('bathrooms'),
            "floor_p" => $this->request->getPost('floor_p'),
            "tenant" => $this->request->getPost('tenant'),
            "image" => $this->request->getPost('image'),
        ); 
        $apartmentModel->update($this->request->getPost('id'), $data);
        return redirect('EncuentraTuCuarto/admin/vistas/departamentos/ver');
    }
    
}
