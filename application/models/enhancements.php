<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of enhancements
 *
 * @author burka
 */
class Enhancements extends _Mymodel{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->setTable('enhancements', 'blueprint_id');
    }
    
    function getEnhancementsByLocation($blueprint_id, $location) {
        $this->db->where('blueprint_id', $blueprint_id);
        $this->db->where('en_location', $location);
        $query = $this->db->get($this->_tableName);
        $query_array = $query->result_array();
        if (count($query_array) == 0) {
            return null;
        } else {
            foreach($query_array as $key => $record) {
                $query_array[$key]['en_energy_cost'] = number_format($record['en_energy_cost']);
                
            }
            return $query_array;
        }
    }
}
