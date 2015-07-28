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

    public function add()
    {
        View_Helper::make('usuarios.add', [], false);
    }

    public function showAll()
    {
        $usuarios = $this->model->getAll(['id','login']);
        View_Helper::make('usuarios.list', [
            'NOTICIAS_BLOCK' => $usuarios
        ], false);
    }

    public function store(){
        parent::store();
        echo 'usuarios-list';
    }

}