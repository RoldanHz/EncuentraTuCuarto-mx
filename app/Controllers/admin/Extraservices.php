<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Extraservices extends BaseController
{
    public function index()
    {
        //
    }
    #función para mostrar los datos de la tabla de la base de datos extraidos del modelo de ExtraServicesModel
    public function ver()
    {
        $servicioExtraModel = model("ExtraServicesModel");
        $data['serviciosExtras'] = $servicioExtraModel->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #se realiza el agregar los datos del formulario de "Agregar Servicio Extra"
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
    #función que realiza la inserción de los datos una vez verificados los datos
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
    #mediante botones, estos realizan una función designada, en este caso se hace un registro del dato que nosotros queremos cambiar
    #y se muestra en el formulario de "Actualizar"
    public function editar($id)
    {
        $servicioExtraModel = model("ExtraServicesModel");
        $data['servicioExtra'] = $servicioExtraModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/serviciosExtras/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #función que sirve para editar un registro seleccionado desde la vista "ver"
    public function eliminar($id)
    {
        $servicioExtraModel = model('ExtraServicesModel');
        $servicioExtraModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/serviciosExtras/ver');
    }
    #realiza lo que es la actualización de los datos llenados en el formulario de "Actualizar"
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
