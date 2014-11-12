<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of economy
 *
 * @author burka
 */
class Economy  extends _Mymodel{
    //put your code here
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('economy_attributes', 'blueprint_id');
    }
    
    function getOne($blueprint_id) {
        $this->db->where('blueprint_id', $blueprint_id);
        $query = $this->db->get($this->_tableName);
        $query_row = $query->row_array();
        if (count($query_row) == 0) {
            return null;
        } else {
            $query_row['eco_energy_boost'] = number_format($query_row['eco_energy_boost']);
            $query_row['eco_energy_storage'] = number_format($query_row['eco_energy_storage']);
            $query_row['eco_mass_boost'] = number_format($query_row['eco_mass_boost']);
            $query_row['eco_mass_storage'] = number_format($query_row['eco_mass_storage']);
            
            return $query_row;
        }
    }
}
