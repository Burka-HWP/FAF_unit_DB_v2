<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author burka
 */
class Users extends _Mymodel{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->setTable('users', 'user_id');
    }
    
    /*
     * getOne(id)
     * 
     * returns a user (or not). taken from lab 9 code.
     */
    function getOne($id) {
        // $this->db->where($this->_keyField, $id);
        // $user = $this->db->get($this->_tableName);
        //$user = $this->db->get($this->_tableName)->row_array();
        

        $user = $this->db->query('select * from users where user_id LIKE "' . $id . '"')->row_array();

        return $user;
    }
    
}
