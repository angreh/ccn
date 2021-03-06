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
        View_Helper::make('noticias.view', array(), false);
    }

    public function showAll()
    {
        $noticias = $this->model->getAll(array('id', 'title', 'message'));
        View_Helper::make('noticias.list', array(
            'NOTICIAS_BLOCK' => $noticias
        ), false);
    }

    public function add()
    {
        View_Helper::make('noticias.add', array(
            'USER_ID' => $this->user_id
        ), false);
    }

    public function edit()
    {
        $noticia = $this->model->get(array(
            'id' => Request_Helper::post('id')
        ));
        View_Helper::make('noticias.edit', array(
            'ID' => $noticia->id,
            'USER_ID' => $noticia->user_id,
            'TITLE' => $noticia->title,
            'MESSAGE' => $noticia->message
        ), false);
    }

    public function store()
    {
        parent::store();
        echo 'noticias-list';
        exit;
    }

    public function delete()
    {
        parent::delete();
        Request_Helper::redirect('noticias-list');
    }

}