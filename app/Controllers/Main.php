<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        // // echo "Hello World";

        // /*
        // A partir do momento que tenho o model, posso instanciar um objeto que já possui algumas funcionalidades
        // */
        // $model_usuarios = new UsuariosModel();
        // $usuarios = $model_usuarios->findAll();

        // // Função dd(); Dump and Die - equivalente ao var_dump
        // // dd($usuarios);
        // // ou
        // echo '<pre>';
        // print_r($usuarios);

        // // tasks
        // $model_tasks = new TasksModel();
        // $tasks = $model_tasks->findAll();

        // // dd($tasks);
        // // ou
        // echo '<pre>';
        // print_r($tasks);

        // return view('teste');
    }

    public function login()
    {
        return view('login_frm');
    }

    public function login_submit()
    {
        // pegando os valores do form
        $usuario = $this->request->getPost('text_usuario');
        $senha = $this->request->getPost('text_senha');

        if (empty($usuario) || empty($senha)) {
            return redirect()->to('login')->withInput()->with('error', 'Usuário e senha obrigatórios');
        }

        echo 'Usuário: ' . $usuario . '<br>';
        echo 'Senha: ' . $senha . '<br>';

        // Como fazemos para validar usuário e senha

    }
}
