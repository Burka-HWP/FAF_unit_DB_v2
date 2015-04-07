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
class Corrections extends _Mymodel{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->setTable('corrections', 'id');
    }
    
    /*
     * getOne(id)
     * 
     * returns a user (or not). taken from lab 9 code.
     */
    function getOne($id) {        

        $feedback = $this->db->query('select * from corrections where id = ' . $id)->row_array();

        return $feedback;
    }

    function add($record) {
        $result = $this->db->query("insert into " . $this->_tableName . 
            " (user_id, correction) values ('" . 
                $record['user_id'] . "', '" . 
                $record['correction'] . "')");

        return $result;
    }

    function getContributors() {
        $result = $this->db->query("select c.user_id, u.user_faction, count(c.user_id) as 'count' from users u join corrections c on u.user_id = c.user_id group by user_id order by count desc");

        return $result->result_array();
    }
    
}
