<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 27/07/2015
 * Time: 17:30
 */
class Usuarios_Controller extends Base_Controller
{
    public function __construct()
    {
        $this->model = new Usuario_Model();
    }

    public function showAll()
    {
        $usuarios = $this->model->getAll(['id', 'login']);
        View_Helper::make('usuarios.list', [
            'NOTICIAS_BLOCK' => $usuarios
        ], false);
    }

    public function add()
    {
        View_Helper::make('usuarios.add', [], false);
    }


    public function edit()
    {
        $usuario = $this->model->get([
            'id' => Request_Helper::post('id')
        ]);
        View_Helper::make('usuarios.edit', [
            'ID' => $usuario->id,
            'LOGIN' => $usuario->login
        ], false);
    }

    public function store()
    {
        parent::store();
        echo 'usuarios-list';
        exit;
    }

    public function delete()
    {
        parent::delete();
        Request_Helper::redirect('usuarios-list');
    }

}