<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 1:28 PM
 */
class Noticias_Controller extends Base_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new Noticia_Model();
    }

    public function view()
    {
        View_Helper::make('noticias.view', [], false);
    }

    public function showAll()
    {
        $noticias = $this->model->getAll(['id', 'title', 'message']);
        View_Helper::make('noticias.list', [
            'NOTICIAS_BLOCK' => $noticias
        ], false);
    }

    public function add()
    {
        View_Helper::make('noticias.add', [
            'USER_ID' => $this->user_id
        ], false);
    }

    public function edit()
    {
        View_Helper::make('noticias.edit', [], false);
    }

    public function store()
    {
        parent::store();
        echo 'noticias-list';
        exit;
    }

}