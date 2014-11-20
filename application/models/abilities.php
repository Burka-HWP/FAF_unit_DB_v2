<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of abilities
 *
 * @author burka
 */
class Abilities extends _Mymodel{
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('abilities', 'blueprint_id');
    }
    
    function getAllForOneUnit($blueprint_id) {
        $this->db->where('blueprint_id', $blueprint_id);
        $query = $this->db->get($this->_tableName);
        $query_row = $query->result_array();
        if (count($query_row) == 0) {
            return null;
        } else {
            return $query_row;
        }
    }
}