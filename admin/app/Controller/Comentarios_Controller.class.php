<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 28/07/2015
 * Time: 11:15
 */
class Comentarios_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Comentarios_Model();
    }

    public function showAll()
    {
        $comentarios = $this->model->getAll(['id', 'client', 'message']);
        View_Helper::make('comentarios.list', [
            'COMENTARIOS_BLOCK' => $comentarios
        ], false);
    }

    public function add()
    {
        View_Helper::make('comentarios.add', [
            'USER_ID' => $this->user_id
        ], false);
    }

    public function store(){
        parent::store();
        echo 'comentarios-list';
    }
}