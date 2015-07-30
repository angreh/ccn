<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 29/07/2015
 * Time: 15:08
 */
class Leak_Controller
{
    public function comments()
    {
        $comModel = new Comentarios_Model();
        $comentarios = $comModel->getAll(['client', 'message']);
        echo json_encode($comentarios);
        exit;
    }

    public function news()
    {
        $newsModel = new Noticia_Model();
        $noticias = $newsModel->getAll(['id', 'title', 'message']);
        echo json_encode($noticias);
        exit;
    }
}