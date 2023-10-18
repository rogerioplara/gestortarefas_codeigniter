<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;

class Main extends BaseController
{
    public function index()
    {
        // echo "Hello World";

        /*
        A partir do momento que tenho o model, posso instanciar um objeto que já possui algumas funcionalidades
        */
        $model_usuarios = new UsuariosModel();
        $usuarios = $model_usuarios->findAll();

        // Função dd(); Dump and Die - equivalente ao var_dump
        // dd($usuarios);
        // ou
        echo '<pre>';
        print_r($usuarios);

        // tasks
        $model_tasks = new TasksModel();
        $tasks = $model_tasks->findAll();

        // dd($tasks);
        // ou
        echo '<pre>';
        print_r($tasks);
    }
}
