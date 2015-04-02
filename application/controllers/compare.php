<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of compare
 *
 * @author burka
 */
class Compare extends Application {
    //put your code here
    
    
    function index() {
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Compare Units';
        $this->data['pagebody'] = 'compare';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->data['quick-nav'] = null;
        
        $units = $this->units->getAll_array();   
        $unitCount = sizeof($units);

        $races = ['aeon', 'cybran', 'uef', 'seraphim'];
        $types = ['Aircraft', 'Vehicle', 'Naval', 'building'];

        $groups = array();
        $groupsIndexes = array();

        // BUILDING THE INITIAL UNIT GROUPING ARRAY
        // loop through by race:
        for ($i = 1; $i < 5; $i++) {
            // loop through by tier:
            for ($j = 1; $j < 5; $j++) {
                // loop through by type:
                for ($k = 1; $k < 5; $k++) {
                    // build up initial array
                    $index = 'r'.$i.'t'.$j.'a'.$k;
                    $groups[$index] = array(
                        'race' => $i,
                        'tier' => $j,
                        'type' => $k,
                        'units' => array()
                    );
                    $groupsIndexes[] = $index;
                }
            }
        }
        // go through units array and determine where to store each one:
        for($m = 0; $m < $unitCount; $m++) {
            // some logic needed to do unit type:
            $curr = $units[$m];
            $currType = '';            
            if ($curr['unit_category'] == 'Aircraft') {
                $currType = 1;
            } else if ($curr['unit_category'] == 'Vehicle' || $curr['unit_category'] == 'Command') {
                $currType = 2;
            } else if ($curr['unit_category'] == 'Naval') {
                $currType = 3;
            } else {
                $currType = 4;
            }
            // assign into the grouping array
            $groups['r'.$curr['unit_race'].'t'.$curr['unit_tier'].'a'.$currType]['units'][] = $curr;
        }


        $this->data['test'] = sizeof($groups);

        $testgroupcount = array();
        $groupsCount = sizeof($groups);

        for($n = 0; $n < $groupsCount; $n++) {
            $testgroupcount[] = array(
                'index' => $groupsIndexes[$n],
                'count' => sizeof($groups[$groupsIndexes[$n]]['units'])
            );
        }

        $this->data['allcounts'] = $testgroupcount;
            
                
                    // assign each unit it's variables:    
        
        $unit1['unit'] = 'unit1';
        //$unit1['options'] = $unit2['options'] = $this->_buildAllOptionItems($units);      
        $unit2['unit'] = 'unit2';     
        $unit3['unit'] = 'unit3';
        $unit4['unit'] = 'unit4';  
        
        //$this->data['script'] = $this->parser->parse('_script', $unit1, TRUE);
        
        $this->data['unit1'] = $this->parser->parse('_form_build_unit_block', $unit1, TRUE);
        $this->data['unit2'] = $this->parser->parse('_form_build_unit_block', $unit2, TRUE);
        $this->data['unit3'] = $this->parser->parse('_form_build_unit_block', $unit3, TRUE);
        $this->data['unit4'] = $this->parser->parse('_form_build_unit_block', $unit4, TRUE);
        
        $this->render();
    }
    
    function compareUnits() {
        
        $unit1_bp = $_POST['unit1_bp'];
        $unit2_bp = $_POST['unit2_bp']; 
        $this->data['quick-nav'] = null;
        
        if($unit2_bp == null || $unit1_bp == null) {
            redirect('/compare');
        } else {
            redirect('/compare/' . $unit1_bp . '/' . $unit2_bp);
        }
        
        
        //$this->twoUnits($unit1_bp, $unit2_bp);
    }
    
    function twoUnits($bp1, $bp2) {
        $unit1 = $this->units->getOne($bp1);
        $unit2 = $this->units->getOne($bp2);
        
        if($unit1 == null || $unit2 == null) {
            redirect('/compare');
        }
        
        $root_dir = "fafunitdb.local/";
        $hard_link = $root_dir . "compare/" . $bp1 . "/" . $bp2;
        $this->data['hard_link'] = $hard_link;
        
        $unit1_data = $this->_buildUnitData($unit1);
        $unit2_data = $this->_buildUnitData($unit2);
        
        
        $this->data['unit1_data'] = $this->parser->parse('_compare_single_unit', $unit1_data, TRUE);
        $this->data['unit2_data'] = $this->parser->parse('_compare_single_unit', $unit2_data, TRUE);
        
        
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Compare 2 Units';
        $this->data['pagebody'] = 'compare_display';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->data['quick-nav'] = null;
        $this->render();
    }
    
    
    
    
    private function _buildUnitData($unit) {
        $vet = $this->veterancy->getOne($unit['blueprint_id']);
        $eco = $this->economy->getOne($unit['blueprint_id']);
        $shield = $this->shields->getOne($unit['blueprint_id']);
        $race = $this->units->getRace($unit['unit_race']);
        $attacks = $this->attacks->getAllAttacks($unit['blueprint_id']);
        $unit['race'] = strtolower($race);
        $unit['race_name'] = $race;
        if($vet != null) {
            $veterancy_data = $this->_buildVeterancyVariable($vet, $unit['unit_health_int'], $unit['unit_regen'], $race);
            $unit['veterancy'] = $this->parser->parse('_show_veterancy', $veterancy_data, TRUE);
        } else {
            $unit['veterancy'] = '';
        }
        if($attacks != null) {
            $attack_data['race'] = strtolower($race);
            $attack_data['attacks'] = $attacks;
            $unit['attacks'] = $this->parser->parse('_compare_attacks', $attack_data, TRUE);
        } else {
            $unit['attacks'] = '';
        }
        
        $unit['abilities_info'] = $this->_buildAbilities($unit, $unit['race']);
                
        //$unit['attacks'] = $this->parser->parse('_show_attacks', null, TRUE);
        //$unit = $this->_assignAttribute($unit, $vet, 'veterancy', '_show_veterancy');
        $unit = $this->_assignAttribute($unit, $eco, 'economy_info', '_show_economy');
        $unit = $this->_assignAttribute($unit, $shield, 'shield_info', '_show_shields');
        
        return $unit;
    }
    
    private function _assignAttribute($unit, $attr, $attr_index, $partial) {
        if($attr != null) {
            $unit = array_merge($unit, $attr);
            $unit[$attr_index] = $this->parser->parse($partial, $unit, TRUE);
        } else {
            $unit[$attr_index] = '';
        }
        return $unit;
    }
    
    private function _buildAllOptionItems($units) {
        $output = '';
        $races = $this->races->getAll_array();
        for($i = 0; $i < sizeof($units); $i++) {
            $units[$i]['unit_race'] = $races[$units[$i]['unit_race']-1]['race_name'];
            $output .= $this->_buildOptionItem($units[$i]);
        }        
        return $output;
    }
    
    
    
    
    private function _buildOptionItem($unit) {
        $output = $this->parser->parse('_form_select_option', $unit, TRUE);
        return $output;
    }
    
    function getOptions($race, $tier, $type) {
        $units = $this->units->getByRaceTierType_array($race, $tier, $type);
        $data['output'] = $this->_buildAllOptionItems($units);        
        //var_dump($this->data['output']);
        $this->load->view('_compare_select_data', $data);        
    }
    
    private function _buildVeterancyVariable($veterancy, $base_hp, $base_regen, $race) {
        
        $veterancy['race'] = strtolower($race);
        
        $veterancy['vet_lvl_1_hp_boost'] = $base_hp * 0.1;
        $veterancy['vet_lvl_2_hp_boost'] = $base_hp * 0.2;
        $veterancy['vet_lvl_3_hp_boost'] = $base_hp * 0.3;
        $veterancy['vet_lvl_4_hp_boost'] = $base_hp * 0.4;
        $veterancy['vet_lvl_5_hp_boost'] = $base_hp * 0.5;
        
        $veterancy['vet_lvl_1_new_hp'] = $base_hp + $veterancy['vet_lvl_1_hp_boost'];
        $veterancy['vet_lvl_2_new_hp'] = $base_hp + $veterancy['vet_lvl_2_hp_boost'];
        $veterancy['vet_lvl_3_new_hp'] = $base_hp + $veterancy['vet_lvl_3_hp_boost'];
        $veterancy['vet_lvl_4_new_hp'] = $base_hp + $veterancy['vet_lvl_4_hp_boost'];
        $veterancy['vet_lvl_5_new_hp'] = $base_hp + $veterancy['vet_lvl_5_hp_boost'];
        
        $veterancy['vet_lvl_1_hp_boost'] = number_format($veterancy['vet_lvl_1_hp_boost']);
        $veterancy['vet_lvl_2_hp_boost'] = number_format($veterancy['vet_lvl_2_hp_boost']);
        $veterancy['vet_lvl_3_hp_boost'] = number_format($veterancy['vet_lvl_3_hp_boost']);
        $veterancy['vet_lvl_4_hp_boost'] = number_format($veterancy['vet_lvl_4_hp_boost']);
        $veterancy['vet_lvl_5_hp_boost'] = number_format($veterancy['vet_lvl_5_hp_boost']);
        
        $veterancy['vet_lvl_1_new_hp'] = number_format($veterancy['vet_lvl_1_new_hp']);
        $veterancy['vet_lvl_2_new_hp'] = number_format($veterancy['vet_lvl_2_new_hp']);
        $veterancy['vet_lvl_3_new_hp'] = number_format($veterancy['vet_lvl_3_new_hp']);
        $veterancy['vet_lvl_4_new_hp'] = number_format($veterancy['vet_lvl_4_new_hp']);
        $veterancy['vet_lvl_5_new_hp'] = number_format($veterancy['vet_lvl_5_new_hp']);
        
        $veterancy['vet_lvl_1_new_regen'] = $base_regen + $veterancy['vet_lvl_1_regen'];
        $veterancy['vet_lvl_2_new_regen'] = $base_regen + $veterancy['vet_lvl_2_regen'];
        $veterancy['vet_lvl_3_new_regen'] = $base_regen + $veterancy['vet_lvl_3_regen'];
        $veterancy['vet_lvl_4_new_regen'] = $base_regen + $veterancy['vet_lvl_4_regen'];
        $veterancy['vet_lvl_5_new_regen'] = $base_regen + $veterancy['vet_lvl_5_regen'];
        
        return $veterancy;
    }
    
    private function _buildAbilities($unit, $race) {
        $output = '';
        $abilities = $this->abilities->getAllForOneUnit($unit['blueprint_id']);
        $ability_string = '';
        $data = array();
        if($abilities == null) {
            return $output;
        } else {
            for($i = 0; $i < count($abilities); $i++) {
                $ability_string .= $abilities[$i]['ability'];
                if ($i < count($abilities) - 1) {
                    $ability_string .= ', ';
                }
            }
            $data['race'] = $race;
            $data['unit_abilities'] = $ability_string;
            $output = $this->parser->parse('_show_abilities', $data, TRUE);
        }
        return $output;
    }
}
