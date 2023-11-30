<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        //
    }
    #función para mostrar los datos de la tabla de la base de datos extraidos del modelo de Users
    public function ver()
    {
        $userModel = model("UsersModel");
        $data['usuarios'] = $userModel->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/users/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #se realiza el agregar los datos del formulario de "Agregar Usuario"
    public function agregar()
    {
        $data['title'] = "Agregar Usuario";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/users/agregar') .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        }

        $rules = [
            'username' => 'required|alpha_numeric|max_length[50]',
            'password' => 'required|max_length[150]',
            'profile' => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/users/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarUsuario()) {
                return redirect('EncuentraTuCuarto/admin/vistas/users/ver');
            }
        }
    }
    #función que realiza la inserción de los datos una vez verificados los datos
    public function insertarUsuario()
    {
        $userModel = model("UsersModel");
        $data = [
            "username" => $this->request->getPost("username"),
            "password" => $this->request->getPost("password"),
            "profile" => $this->request->getPost("profile"),
        ];
        $userModel->insert($data, false);
        return true;
    }
    #mediante botones, estos realizan una función designada, en este caso se hace un registro del dato que nosotros queremos cambiar
    #y se muestra en el formulario de "Actualizar"
    public function editar($id)
    {
        $userModel = model("UsersModel");
        $data['usuarios'] = $userModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/users/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    #función que sirve para editar un registro seleccionado desde la vista "ver"
    public function eliminar($id)
    {
        $userModel = model('UsersModel');
        $userModel->delete($id);
        return redirect('EncuentraTuCuarto/admin/vistas/users/ver');
    }
    #realiza lo que es la actualización de los datos llenados en el formulario de "Actualizar"
    public function actualizar()
    {
        $userModel = model('UsersModel');
        $data = [
            "username" => $this->request->getPost('username'),
            "password" => $this->request->getPost('password'),
            "profile" => $this->request->getPost('profile'),
        ];
        $userModel->update($_POST['id'], $data);
        return redirect('EncuentraTuCuarto/admin/vistas/users/ver');
    }
}
