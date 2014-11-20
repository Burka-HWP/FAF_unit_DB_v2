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
        $this->setTable('weapon_stats', 'blueprint_id');
    }
    
    function getAllAttacks($blueprint_id) {
             
        $query = $this->db->query(
                'select *, count(display_name) as "multiplier" '
                . 'from weapon_stats '
                . 'where blueprint_id = \'' . $blueprint_id . '\' '
                . 'group by display_name, blueprint_id '
                . 'order by blueprint_id asc;');
        $query_array = $query->result_array();
        if (count($query_array) == 0) {
            return null;
        } else {
            foreach($query_array as $key => $record) {
                $query_array[$key]['total_dps'] = number_format($record['damage'] 
                                            * $record['rate_of_fire']
                                            * $record['muzzle_salvo_size']
                                            * $record['multiplier'], 2);
                $query_array[$key]['attack_dps'] = number_format($record['damage'] 
                                            * $record['rate_of_fire']
                                            * $record['muzzle_salvo_size'], 2);
                $query_array[$key]['cycle_damage'] = number_format($record['damage'] 
                                            * $record['muzzle_salvo_size'], 2);
                if($record['rate_of_fire'] == 0) {
                    $query_array[$key]['seconds_per_cycle'] = null;
                } else {
                    $query_array[$key]['seconds_per_cycle'] = number_format(1 / $record['rate_of_fire'], 2);
                }
                
                $query_array[$key]['cycle_total_damage'] = number_format($record['muzzle_salvo_size']
                                            * $record['damage'], 2);
                
                
                
                // format single values after use:
                $query_array[$key]['nuke_inner_ring_damage'] = number_format($record['nuke_inner_ring_damage']);
                $query_array[$key]['nuke_outer_ring_damage'] = number_format($record['nuke_outer_ring_damage']);
                $query_array[$key]['damage'] = number_format($record['damage']);
                $query_array[$key]['max_radius'] = number_format($record['max_radius']);
            }
            return $query_array;
        }
    }
    
//    foreach($query as $key => $row) {            
//            $query[$key]['race'] = strtolower($this->getRace($race));
//        } 
}
