<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 27/07/2015
 * Time: 17:40
 */
class Controller_Core
{
    /**
     * @var Model_Core
     */
    protected $model = '';

    public function store()
    {
        $id = Request_Helper::post('id');

        if ($id == null) {
            $this->model->insert(Request_Helper::post());
        } else {
            $this->model->update(Request_Helper::post());
        }
    }

    public function delete()
    {
        $this->model->softDelete(Request_Helper::post('id'));
    }
}