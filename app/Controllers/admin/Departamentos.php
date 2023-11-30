<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Departamentos extends BaseController
{
    #función para mostrar los datos de la tabla de la base de datos extraidos del modelo de Apartamentos
    public function ver()
    {
        $apartmentModel = model("ApartamentosModel");
        $data['departamentos'] = $apartmentModel->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/departamentos/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    #se realiza el agregar los datos del formulario de "Agregar Departamento"
    public function agregar()
    {
        $data['title'] = "Agregar Apartamento";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/departamentos/agregar') .
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
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/departamentos/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarApartamento()) {
                return redirect('EncuentraTuCuarto/admin/vistas/departamentos/ver');
            }
        }
    }
    #función que realiza la inserción de los datos una vez verificados los datos
    public function insertarApartamento()
    {
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

    #mediante botones, estos realizan una función designada, en este caso se hace un registro del dato que nosotros queremos cambiar
    #y se muestra en el formulario de "Actualizar"
    public function editar($id)
    {
        $apartmentModel = model("ApartamentosModel");
        $data['departamentos'] = $apartmentModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/departamentos/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    #función que sirve para editar un registro seleccionado desde la vista "ver"
    public function eliminar($id)
    {
        $apartmentModel = model('ApartamentosModel');
        $apartmentModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/departamentos/ver');
    }

    #realiza lo que es la actualización de los datos llenados en el formulario de "Actualizar"
    public function actualizar()
    {
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
