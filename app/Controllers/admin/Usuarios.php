<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Usuarios extends BaseController
{
    public function index()
    {
        //
    }

    public function ver()
    {
        $userModel = model("UserInfoModel");
        $data['users'] = $userModel->findAll();

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/usuarios/ver', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function agregar()
    {
        $data['users'] = "Agregar Usuario";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/usuarios/agregar') .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        }

        $rules = [
            'name' => 'required|max_length[50]',
            'lastname' => 'required|max_length[80]',
            'birthday' => 'valid_date',
            'account_number' => 'max_length[20]',
            'bank_name' => 'max_length[50]',
            'account_type' => 'max_length[20]',
            'account_holder' => 'max_length[50]',
            'cvv' => 'integer',
            'month_c' => 'integer',
            'year_c' => 'integer',
            'gender' => 'required|alpha',
            'phone' => 'max_length[15]',
            'photo' => 'max_length[250]',
            'bio' => 'max_length[255]',
            'RFC' => 'max_length[255]',
            'email' => 'required|valid_email|max_length[255]'
        ];

        if (!$this->validate($rules)) {
            return
                view('EncuentraTuCuarto/admin/common/headadmin', $data) .
                view('EncuentraTuCuarto/admin/vistas/usuarios/agregar', ['validation' => $validation]) .
                view('EncuentraTuCuarto/admin/common/footeradmin');
        } else {
            if ($this->insertarUsuario()) {
                return redirect('EncuentraTuCuarto/admin/vistas/usuarios/ver');
            }
        }
    }

    public function insertarUsuario()
    {
        $userModel = model("UserInfoModel");
        $data = [
            "name" => $this->request->getPost("name"),
            "lastname" => $this->request->getPost("lastname"),
            "birthday" => $this->request->getPost("birthday"),
            "account_number" => $this->request->getPost("account_number"),
            "bank_name" => $this->request->getPost("bank_name"),
            "account_type" => $this->request->getPost("account_type"),
            "account_holder" => $this->request->getPost("account_holder"),
            "cvv" => $this->request->getPost("cvv"),
            "month_c" => $this->request->getPost("month_c"),
            "year_c" => $this->request->getPost("year_c"),
            "gender" => $this->request->getPost("gender"),
            "phone" => $this->request->getPost("phone"),
            "photo" => $this->request->getPost("photo"),
            "bio" => $this->request->getPost("bio"),
            "RFC" => $this->request->getPost("RFC"),
            "email" => $this->request->getPost("email"),
        ];
        $userModel->insert($data, false);
        return true;
    }

    // Continuación del código

    public function editar($id)
    {
        $userModel = model("UserInfoModel");
        $data['users'] = $userModel->find($id);

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/usuarios/editar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function buscar()
    {
        $userModel = model('UserInfoModel');
        if ($this->request->getGet('name')) {
            $name = $this->request->getGet('name');
            $lastname = $this->request->getGet('lastname');
            $gender = $this->request->getGet('gender');
            $email = $this->request->getGet('email');
            $data['users'] = $userModel
                ->like('name', $name)
                ->like('lastname', $lastname)
                ->LIKE('gender', $gender)
                ->like('email', $email)
                ->findAll();
        } else {
            $name = "";
            $data['users'] = $userModel->findAll();
        }

        return
            view('EncuentraTuCuarto/admin/common/headadmin') .
            view('EncuentraTuCuarto/admin/vistas/usuarios/buscar', $data) .
            view('EncuentraTuCuarto/admin/common/footeradmin');
    }

    public function eliminar($id)
    {
        $userModel = model('UserInfoModel');
        $userModel->delete($id);
        return redirect('EncuentraTuCuartoo/admin/vistas/usuarios/ver');
    }

    public function actualizar()
    {
        $userModel = model('UserInfoModel');
        $data = [
            "name" => $this->request->getPost('name'),
            "lastname" => $this->request->getPost('lastname'),
            "birthday" => $this->request->getPost('birthday'),
            "account_number" => $this->request->getPost('account_number'),
            "bank_name" => $this->request->getPost("bank_name"),
            "account_type" => $this->request->getPost("account_type"),
            "account_holder" => $this->request->getPost("account_holder"),
            "cvv" => $this->request->getPost("cvv"),
            "month_c" => $this->request->getPost("month_c"),
            "year_c" => $this->request->getPost("year_c"),
            "gender" => $this->request->getPost("gender"),
            "phone" => $this->request->getPost("phone"),
            "photo" => $this->request->getPost("photo"),
            "bio" => $this->request->getPost("bio"),
            "RFC" => $this->request->getPost("RFC"),
            "email" => $this->request->getPost('email'),
        ];
        $userModel->update($_POST['id'], $data);
        return redirect('EncuentraTuCuarto/admin/vistas/usuarios/ver');
    }
}
