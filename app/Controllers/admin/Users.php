<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        //
    }
    public function ver()  {
        $userModel = model("UsersModel");
        $data['usuarios'] = $userModel->findAll();
    
        return
        view('EncuentraTuCuarto/admin/common/headadmin').
        view('EncuentraTuCuarto/admin/vistas/users/ver', $data). 
        view('EncuentraTuCuarto/admin/common/footeradmin');
    }
    
    public function agregar()  {
        $data['title'] = "Agregar Usuario";
        $validation = \Config\Services::validation();
    
        if (strtolower($this->request->getMethod()) === 'get') {
            return
            view('EncuentraTuCuarto/admin/common/headadmin', $data).       
            view('EncuentraTuCuarto/admin/vistas/users/agregar').
            view('EncuentraTuCuarto/admin/common/footeradmin');
        }
    
        $rules = [
            'username' => 'required|alpha_numeric|max_length[50]',
            'password' => 'required|max_length[150]',
            'profile' => 'required|integer',
        ];
    
        if (!$this->validate($rules)) {
            return 
            view('EncuentraTuCuarto/admin/common/headadmin', $data).    
            view('EncuentraTuCuarto/admin/vistas/users/agregar', ['validation' => $validation]).
            view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarUsuario()) {
                return redirect('EncuentraTuCuarto/admin/vistas/users/ver');
            }
        }
    }
    
    public function insertarUsuario() { 
        $userModel = model("UsersModel");
        $data = [
            "username" => $this->request->getPost("username"),
            "password" => $this->request->getPost("password"),
            "profile" => $this->request->getPost("profile"),
        ];
        $userModel->insert($data, false);
        return true;
    }

public function editar($id)  {
    $userModel = model("UsersModel");
    $data['usuarios'] = $userModel->find($id);

    return
    view('EncuentraTuCuarto/admin/common/headadmin').        
    view('EncuentraTuCuarto/admin/vistas/users/editar', $data).
    view('EncuentraTuCuarto/admin/common/footeradmin');  
}

public function buscar() {
    $userModel = model('UsersModel');
    if ($this->request->getGet('username')) {
        $username = $this->request->getGet('username');
        $profile = $this->request->getGet('profile');
        $data['usuarios'] = $userModel
            ->like('username', $username)
            ->like('profile', $profile)
            ->findAll();
    } else {
        $username = "";
        $data['usuarios'] = $userModel->findAll();
    }

    return
    view('EncuentraTuCuarto/admin/common/headadmin').     
    view('EncuentraTuCuarto/admin/vistas/users/buscar', $data).
    view('EncuentraTuCuarto/admin/common/footeradmin');
}

public function eliminar($id) {
    $userModel = model('UsersModel');
    $userModel->delete($id);
    return redirect('EncuentraTuCuarto/admin/vistas/users/ver');
}

public function actualizar() {
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
