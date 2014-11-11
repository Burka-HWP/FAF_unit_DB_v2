<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shields
 *
 * @author burka
 */
class Shields extends _Mymodel {
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('shields', 'blueprint_id');
    }
    
    function getOne($blueprint_id) {
        $this->db->where('blueprint_id', $blueprint_id);
        $query = $this->db->get($this->_tableName);
        $query_row = $query->row_array();
        if (count($query_row) == 0) {
            return null;
        } else {
            $query_row['sh_health'] = number_format($query_row['sh_health']);
            return $query_row;
        }
    }
    
    
    // Race-specific methods
    
    
}
