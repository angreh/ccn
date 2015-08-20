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
        $noticias = $newsModel->query('SELECT id,title,message FROM ccn_news cn WHERE cn.deleted=0 ORDER BY cn.created DESC LIMIT 4');
        if ($noticias->num_rows > 0) {
            $return = array();
            while ($row = $noticias->fetch_object()) {
                $return[] = $row;
            }
        } else {
            return false;
        }        //$noticias = $newsModel->getAll(['id', 'title', 'message']);
        echo json_encode($return);
        exit;
    }
}