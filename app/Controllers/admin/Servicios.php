<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Servicios extends BaseController
{
    #función para mostrar los datos de la tabla de la base de datos extraidos del modelo de Servicios
    public function ver()
    {

        $servis = model("ServiciosModel");
        $data['servicios'] = $servis->findAll();
        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/servicios/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #se realiza el agregar los datos del formulario de "Agregar Servicio (diferente a servicio extra)"
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
    #función que realiza la inserción de los datos una vez verificados los datos
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
    #mediante botones, estos realizan una función designada, en este caso se hace un registro del dato que nosotros queremos cambiar
    #y se muestra en el formulario de "Actualizar"
    public function editar($id)
    {
        $servicioModel = model("ServiciosModel");
        $data['servicio'] = $servicioModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/servicios/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #función que sirve para editar un registro seleccionado desde la vista "ver"
    public function eliminar($id)
    {
        $servicioModel = model('ServiciosModel');
        $servicioModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/servicios/ver');
    }
    #realiza lo que es la actualización de los datos llenados en el formulario de "Actualizar"
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
