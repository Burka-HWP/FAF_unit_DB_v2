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
class Feedbacks extends _Mymodel{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->setTable('feedbacks', 'id');
    }
    
    /*
     * getOne(id)
     * 
     * returns a user (or not). taken from lab 9 code.
     */
    function getOne($id) {        

        $feedback = $this->db->query('select * from feedbacks where id = ' . $id)->row_array();

        return $feedback;
    }

    function add($record) {
        $result = $this->db->query("insert into " . $this->_tableName . 
            " (user_id, feedback) values ('" . 
                $record['user_id'] . "', '" . 
                $record['feedback'] . "')");

        return $result;
    }
    
}
