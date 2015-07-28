<?php

/**
 * Created by PhpStorm.
 * User: Bel
 * Date: 7/26/2015
 * Time: 9:59 AM
 */
class Base_Controller extends Controller_Core
{
    protected $user_id = '';

    public function __construct()
    {
        @ session_start();
        if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
            Request_Helper::redirect('index');
        }
        $this->user_id = $_SESSION['id'];
    }
} 