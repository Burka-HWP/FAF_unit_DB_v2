<?php

/**
 * Description of unit
 *
 * @author burka
 */
class Units extends _Mymodel {
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('units', 'blueprint_id');
    }
    
    function getByRaceTierType_array($race, $tier, $type) {
        $this->db->where('unit_race', $race);
        $this->db->where('unit_tier', $tier);
        $this->db->where('unit_type', $type);  
        $this->db->order_by('unit_category', 'asc');
        $this->db->order_by('blueprint_id', 'asc');
        
        $query = $this->db->get($this->_tableName)->result_array();
        foreach($query as $key => $row) {           
            
            $query[$key]['tech'] = $this->_buildTierPrefix($query[$key]['unit_tier'], $query[$key]['unit_class']);
        } 
        return $query;
    }
    
    function getByRaceCategoryForOneRace_array($race, $category) {
        $this->db->where('unit_race', $race);
        $this->db->where('unit_category', $category);        
        $this->db->order_by('unit_tier', 'asc');
        $this->db->order_by('unit_type', 'desc');        
        $this->db->order_by('blueprint_id', 'asc');
        
        $query = $this->db->get($this->_tableName)->result_array();             
        
        foreach($query as $key => $row) {            
            $query[$key]['race'] = strtolower($this->getRace($race));
            $query[$key]['tech'] = $this->_buildTierPrefix($query[$key]['unit_tier'], $query[$key]['unit_class']);
        }       
        return $query;
    }
    
    
    function getByRaceCategory_array($race, $category) {
        $this->db->where('unit_race', $race);
        $this->db->where('unit_category', $category);        
        $this->db->order_by('unit_race', 'asc');
        $this->db->order_by('unit_type', 'desc');
        $this->db->order_by('blueprint_id', 'asc');
        
        $query = $this->db->get($this->_tableName)->result_array();             
        
        foreach($query as $key => $row) {            
            $query[$key]['race'] = strtolower($this->getRace($race));
            $query[$key]['tech'] = $this->_buildTierPrefix($query[$key]['unit_tier'], $query[$key]['unit_class']);
        }       
        return $query;
    }
    
    function getByRaceCategoryTier_array($race, $category, $tier) {
        $this->db->where('unit_tier', $tier);
        $this->db->where('unit_category', $category);
        $this->db->where('unit_race', $race);
        $this->db->order_by('unit_race', 'asc');
        $this->db->order_by('unit_type', 'desc');
        $this->db->order_by('blueprint_id', 'asc');
        
        $query = $this->db->get($this->_tableName)->result_array();  
        
        if(count($query) < 1){
            return null;
        }
        
        foreach($query as $key => $row) {            
            $query[$key]['race'] = strtolower($this->getRace($race));
            $query[$key]['tech'] = $this->_buildTierPrefix($query[$key]['unit_tier'], $query[$key]['unit_class']);
        }       
        return $query;       
    }
    
    
    // Unit-specific methods
    function getOne($blueprint_id) {
        $this->db->where('blueprint_id', $blueprint_id);
        $query = $this->db->get($this->_tableName);
        $query_row = $query->row_array();
        if(count($query_row) < 1) {
            return null;
        }
        $query_row['w_hp'] = number_format($query_row['unit_health'] * 0.9);
        $query_row['w_mass'] = number_format($query_row['unit_mass_cost'] * 0.9);
        $query_row['unit_health_int'] = $query_row['unit_health'];
        $query_row['unit_health'] = number_format($query_row['unit_health']);
        $query_row['unit_mass_cost'] = number_format($query_row['unit_mass_cost']);
        $query_row['unit_energy_cost'] = number_format($query_row['unit_energy_cost']);
        $query_row['unit_build_time'] = number_format($query_row['unit_build_time']);
        $query_row['avatar'] = strtoupper($query_row['blueprint_id']) . '.png';
        $query_row['tech'] = $this->_buildTierPrefix($query_row['unit_tier'], $query_row['unit_class']);
        if($query_row['unit_has_portrait'] == 'no') {
            $query_row['portrait'] = 'portrait' . $query_row['unit_race'] . '.png';
        } else {
            $query_row['portrait'] = $blueprint_id . '.png';
        }
        
        return $query_row;       
    }
    
    function getRace($race_id) {
        $race = $this->db->query("select race_name from races where race_id = " 
                . $race_id . ";")->row_array();       
        
        return $race['race_name']; 
    }
    
    function getAllByRace_array($race_id) {
        $this->db->where('unit_race_id', $race_id);
        $query = $this->db->get($this->_tableName);
        
        $query_array = $query->result_array();
        foreach($query_array as $record) {
            $record['tech'] = $this->_buildTierPrefix($record['unit_tier'], $record['unit_class']);
        }
        //return $query->result_array();
        return $query_array;
    }
    
    function getByRaceAndClass_array($race_id, $unit_class) {
        $this->db->where('unit_race_id', $race_id);
        $this->db->where('unit_class', $unit_class);
        $this->db->order_by('unit_tier', "asc");
        $this->db->order_by('unit_id', "asc");        
        
        $query = $this->db->get($this->_tableName);
        
        $query_array = $query->result_array();
        foreach($query_array as $record) {
            $record['tech'] = $this->_buildTierPrefix($record['unit_tier'], $record['unit_class']);
        }
        //return $query->result_array();
        return $query_array;
    }    
    
    private function _buildTierPrefix($tier, $class) {
        $output = '';
        
        if( $class == 'Armored Command Unit' || $tier == 4 ) {
            return $output;
        } else {
            $output .= 'T' . $tier;
        }
        return $output;
    }

    function getCount() {
        $result = $this->db->query('select count(*) as count from units')->row_array();

        return $result['count'];
    }
}
