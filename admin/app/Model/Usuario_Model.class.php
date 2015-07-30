<?php

/**
 * Created by PhpStorm.
 * User: Angreh
 * Date: 27/07/2015
 * Time: 17:38
 */
class Usuario_Model extends Model_Core
{
    protected $table = 'ccn_users';

    public function insert($data){
        $data['pass'] = md5($data['pass']);
        return parent::insert($data);
    }

    public function update($data, $primaryKey = 'id'){
        if(isset($data['pass'])){
            $data['pass'] = md5($data['pass']);
        }
        parent::update($data);
    }
}