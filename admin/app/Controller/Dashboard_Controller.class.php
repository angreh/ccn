<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 9:58 AM
 */
class Dashboard_Controller extends Base_Controller
{
    public function view()
    {
        $data = $this->getData();
        View_Helper::make('dashboard.view', array(
            'NOTICIAS_BLOCK' => $data['noticias'],
            'COMENTARIOS_BLOCK' => $data['comentarios']
        ));
    }

    public function noTemplateView()
    {
        $data = $this->getData();
        View_Helper::make('dashboard.view', array(
            'NOTICIAS_BLOCK' => $data['noticias'],
            'COMENTARIOS_BLOCK' => $data['comentarios']
        ), false);
    }

    private function getData()
    {
        $notModel = new Noticia_Model();
        $noticias = $notModel->getAll(array('id', 'title', 'message'));

        $comModel = new Comentarios_Model();
        $comentarios = $comModel->getAll(array('id', 'client', 'message'));

        return array(
            'noticias' => $noticias,
            'comentarios' => $comentarios
        );
    }
} 