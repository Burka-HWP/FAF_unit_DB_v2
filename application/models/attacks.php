<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of attacks
 *
 * @author burka
 */
class Attacks extends _Mymodel{
    //put your code here
    function __construct() {
        parent::__construct();
        $this->setTable('attacks', 'blueprint_id');
    }
    
    function getAllAttacks($blueprint_id) {
        $this->db->where('blueprint_id', $blueprint_id);        
        $query = $this->db->get($this->_tableName);
        $query_array = $query->result_array();
        if (count($query_array) == 0) {
            return null;
        } else {
            foreach($query_array as $key => $record) {
                $query_array[$key]['total_dps'] = number_format($record['attack_cannon_count'] 
                                            * $record['attack_damage_per_projectile'] 
                                            * $record['attack_num_of_projectile_per_cycle']
                                            / $record['attack_seconds_per_cycle'], 2);
                $query_array[$key]['attack_dps'] = number_format($record['attack_damage_per_projectile'] 
                                            * $record['attack_num_of_projectile_per_cycle']
                                            / $record['attack_seconds_per_cycle'], 2);
                $query_array[$key]['attack_cycle_total_damage'] = number_format($record['attack_damage_per_projectile'] 
                                            * $record['attack_num_of_projectile_per_cycle'], 2);
            }
            return $query_array;
        }
    }
    
//    foreach($query as $key => $row) {            
//            $query[$key]['race'] = strtolower($this->getRace($race));
//        } 
}
