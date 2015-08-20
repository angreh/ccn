<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 27/07/2015
 * Time: 14:25
 */
class Login_Controller extends Controller_Core
{
    public function __construct()
    {
        $this->model = new Usuario_Model();
    }

    public function login()
    {
        $post = Request_Helper::post();
        if (!empty($post)) {
            $this->storeSession($post);
        }
        View_Helper::make('login.login', array(), 'login');
    }

    public function fail()
    {
        View_Helper::make('login.fail', array(), 'login');
    }

    public function logout()
    {
        @ session_start();
        unset($_SESSION['id']);
        session_destroy();
        Request_Helper::redirect('index');
    }

    private function storeSession($post)
    {
        $post['pass'] = md5($post['pass']);
        $user = $this->model->get($post);
        //exit(var_dump($user));
        if (is_object($user)) {
            @ session_start();
            $_SESSION['id'] = $user->id;
            Request_Helper::redirect('dashboard');
        } else {
            Request_Helper::redirect('login-fail');
        }
    }
}