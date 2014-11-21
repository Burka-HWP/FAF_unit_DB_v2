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
        $this->setTable('enhancement_stats', 'blueprint_id');
    }
    
    function getEnhancementsByLocation($blueprint_id, $location) {
        $this->db->where('blueprint_id', $blueprint_id);
        $this->db->where('location', $location);
        $query = $this->db->get($this->_tableName);
        $query_array = $query->result_array();
        if (count($query_array) == 0) {
            return null;
        } else {
            foreach($query_array as $key => $record) {
//                $query_array[$key]['build_cost_energy'] = number_format($record['build_cost_e']);
//                $query_array[$key]['en_mass_cost'] = number_format($record['en_mass_cost']);
//                $query_array[$key]['en_build_time'] = number_format($record['en_build_time']);
//                if($query_array[$key]['en_energy_eco'] != null) {
//                    $query_array[$key]['en_energy_eco'] = '(' . number_format($record['en_energy_eco']) . ')';
//                }
//                if($query_array[$key]['en_mass_eco'] != null) {
//                    $query_array[$key]['en_mass_eco'] = '(' . number_format($record['en_mass_eco']) . ')';
//                }
                
            }
            return $query_array;
        }
    }
}
