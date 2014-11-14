<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unit
 *
 * @author burka
 */
class Unit extends Application {
    //put your code here
    
    
    
    function index() {
        $this->data['title'] = 'Forged Alliance Forever - Unit Database';
        $this->data['pagebody'] = 'all';        
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';        

        // Command units
        $this->data['aeon-command'] = $this->_buildLineItemsByRaceCategory(1, 'Command');
        $this->data['cybran-command'] = $this->_buildLineItemsByRaceCategory(2, 'Command');
        $this->data['uef-command'] = $this->_buildLineItemsByRaceCategory(3, 'Command');
        $this->data['seraphim-command'] = $this->_buildLineItemsByRaceCategory(4, 'Command');
        
        // Engineering units
        $this->data['engineering-1'] = $this->_buildCategoryRow('Engineering', 1);
        $this->data['engineering-2'] = $this->_buildCategoryRow('Engineering', 2);
        $this->data['engineering-3'] = $this->_buildCategoryRow('Engineering', 3);
        
        // Factory units
        $this->data['factory-1'] = $this->_buildCategoryRow('Factory', 1);
        $this->data['factory-2'] = $this->_buildCategoryRow('Factory', 2);
        $this->data['factory-3'] = $this->_buildCategoryRow('Factory', 3);
        
        // Economy units
        $this->data['economy-1'] = $this->_buildCategoryRow('Economy', 1);
        $this->data['economy-2'] = $this->_buildCategoryRow('Economy', 2);
        $this->data['economy-3'] = $this->_buildCategoryRow('Economy', 3);
        $this->data['economy-4'] = $this->_buildCategoryRow('Economy', 4);
        
        // Attack Building units
        $this->data['attack-1'] = $this->_buildCategoryRow('Attack', 1);
        $this->data['attack-2'] = $this->_buildCategoryRow('Attack', 2);
        $this->data['attack-3'] = $this->_buildCategoryRow('Attack', 3);
        $this->data['attack-4'] = $this->_buildCategoryRow('Attack', 4);
        
        // Defense Building units
        $this->data['defense-2'] = $this->_buildCategoryRow('Defense', 2);
        $this->data['defense-3'] = $this->_buildCategoryRow('Defense', 3);
        
        // Sensor Building units        
        $this->data['sensor-1'] = $this->_buildCategoryRow('Sensor', 1);
        $this->data['sensor-2'] = $this->_buildCategoryRow('Sensor', 2);
        $this->data['sensor-3'] = $this->_buildCategoryRow('Sensor', 3);      
        
        // Aircraft units
        $this->data['aircraft-1'] = $this->_buildCategoryRow('Aircraft', 1);
        $this->data['aircraft-2'] = $this->_buildCategoryRow('Aircraft', 2);
        $this->data['aircraft-3'] = $this->_buildCategoryRow('Aircraft', 3);
        $this->data['aircraft-4'] = $this->_buildCategoryRow('Aircraft', 4);
                
        // Vehicle units
        $this->data['vehicle-1'] = $this->_buildCategoryRow('Vehicle', 1);
        $this->data['vehicle-2'] = $this->_buildCategoryRow('Vehicle', 2);
        $this->data['vehicle-3'] = $this->_buildCategoryRow('Vehicle', 3);
        $this->data['vehicle-4'] = $this->_buildCategoryRow('Vehicle', 4);
        
        // Naval units
        $this->data['naval-1'] = $this->_buildCategoryRow('Naval', 1);
        $this->data['naval-2'] = $this->_buildCategoryRow('Naval', 2);
        $this->data['naval-3'] = $this->_buildCategoryRow('Naval', 3);
        $this->data['naval-4'] = $this->_buildCategoryRow('Naval', 4);
        
        // Support units
        $this->data['support-1'] = $this->_buildCategoryRow('Support', 1);
        $this->data['support-2'] = $this->_buildCategoryRow('Support', 2);
        $this->data['support-4'] = $this->_buildCategoryRow('Support', 4);
        
        $this->render();
    }
    
    
        
    function oneRace($race_id) {
        $race = $this->units->getRace($race_id);
        $race_lower = strtolower($race); 
        $race_bg = $race_lower . '-bg';
        
        $this->data['race'] = $race_lower;
        $this->data['race-logo'] = $race_lower . '_splash.png';
        $this->data['race-bg'] = $race_bg;
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - ' . $race;
        $this->data['pagebody'] = 'race';
        
        $command_units = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Command');   
        $this->data['command-units'] = $this->_buildRaceCategory($command_units);
        
        $engineering_units = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Engineering');   
        $this->data['engineering-units'] = $this->_buildRaceCategory($engineering_units);
        
        $factory_units = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Factory');   
        $this->data['factory-units'] = $this->_buildRaceCategory($factory_units);
        
        $economy_units = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Economy');
        $this->data['economy-units'] = $this->_buildRaceCategory($economy_units);
        
        $attack_buildings = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Attack');
        $this->data['attack-buildings'] = $this->_buildRaceCategory($attack_buildings);
        
        $defense_buildings = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Defense');
        $this->data['defense-buildings'] = $this->_buildRaceCategory($defense_buildings);
        
        $sensor_buildings = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Sensor');
        $this->data['sensor-buildings'] = $this->_buildRaceCategory($sensor_buildings);
        
        $aircraft = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Aircraft');
        $this->data['aircraft'] = $this->_buildRaceCategory($aircraft);
        
        $vehicles = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Vehicle');
        $this->data['vehicles'] = $this->_buildRaceCategory($vehicles);
        
        $naval = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Naval');
        $this->data['naval'] = $this->_buildRaceCategory($naval);
        
        $support = $this->units->getByRaceCategoryForOneRace_array($race_id, 'Support');
        $this->data['support'] = $this->_buildRaceCategory($support);
        
        $this->render();
    }
    
    function show($blueprint_id) {
        // variables:
        $unit = $this->units->getOne($blueprint_id);
        $race_title = $this->units->getRace($unit['unit_race']);
        $race = strtolower($race_title);
        $unit['race'] = $race;
        $unit['race_name'] = $race_title;
        
        $economy = $this->economy->getOne($blueprint_id);
        if($economy != null) {
            $economy['race'] = $race;
            $unit['economy_info'] = $this->_buildPartial('_show_economy', $economy);
        } else {
            $unit['economy_info'] = '';
        }
        
        if($unit['unit_abilities'] != null) {
            $unit['abilities_info'] = $this->_buildPartial('_show_abilities', $unit);
        } else {
            $unit['abilities_info'] = '';
        }
        
        $shield = $this->shields->getOne($blueprint_id);
        if($shield != null) {
            $shield['race'] = $race;
            $unit['shield_info'] = $this->_buildPartial('_show_shields', $shield);
        } else {
            $unit['shield_info'] = '';
        }
        
        $veterancy = $this->veterancy->getOne($blueprint_id);
        if($veterancy != null) {
            $veterancy = $this->_buildVeterancyVariable($veterancy, $unit['unit_health_int'], $unit['unit_regen'], $race);
            $this->data['veterancy'] = $this->_buildPartial('_show_veterancy', $veterancy);
        } else {
            $this->data['veterancy'] = '';
        }
        
        $attributes = $this->attributes->getOne($blueprint_id);
        if($attributes != null) {
            $attributes = $this->_buildAttributeVariable($attributes);
            if($this->_hasEcoAttributes($attributes)) {
                $attributes['att_build_power'] = $this->_buildPartial('_show_build_power', $attributes);
            } else {
                $attributes['att_build_power'] = '';
            }
            if($this->_hasDetectionAttributes($attributes)) {
                $attributes['att_detection'] = $this->_buildPartial('_show_detection', $attributes);
            } else {
                $attributes['att_detection'] = '';
            }
            if($this->_hasMovementAttributes($attributes)) {
                $attributes['att_movement'] = $this->_buildPartial('_show_movement', $attributes);
            } else {
                $attributes['att_movement'] = '';
            }
        } else {
            $attributes = null;
        }
        
//        if($this->_hasEcoAttributes($attributes)) {
//            $attributes['att_build_power'] = $this->_buildPartial('_show_build_power', $attributes);
//        } else {
//            $attributes['att_build_power'] = '';
//        }
//        
//        if($this->_hasDetectionAttributes($attributes)) {
//            $attributes['att_detection'] = $this->_buildPartial('_show_detection', $attributes);
//        } else {
//            $attributes['att_detection'] = '';
//        }
        
        if($attributes != null) {
            $this->data['unit_spec_info'] = $this->_buildPartial('_show_unit_spec_info', $attributes);
        } else {
            $this->data['unit_spec_info'] = '';
        }
        
        $this->data['race'] = $race;
        $this->data['race-logo'] = $race . '_splash.png';
        $this->data['race-bg'] = $race . '-bg';
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - ' . $race_title;
        $this->data['pagebody'] = 'show';       
    
       
        
        // load the unit basic info    
        $this->data['basic_info'] = $this->_buildPartial('_show_basic_info', $unit);

        // load unit-specific info
        //$this->data['unit_spec_info'] = $this->_buildPartial('_show_unit_spec_info', $attributes);

        // load attack data
        $attacks = $this->attacks->getAllAttacks($blueprint_id);
        if($attacks != null) {
            $attack_data['race'] = $race;
            $attack_data['attacks'] = $attacks;
            $this->data['attacks'] = $this->_buildPartial('_show_attacks', $attack_data);
        } else {
            $this->data['attacks'] = '';
        }
        
        //$this->data['attacks'] = $this->_buildPartial('_show_attacks', $unit);

        // load defense data
        $this->data['defenses'] = $this->_buildPartial('_show_defenses', $unit);

        // load upgrade data
        
        $LCH = $this->enhancements->getEnhancementsByLocation($blueprint_id, 'LCH');
        $RCH = $this->enhancements->getEnhancementsByLocation($blueprint_id, 'RCH');
        $Back = $this->enhancements->getEnhancementsByLocation($blueprint_id, 'Back');
        if($LCH != null) {
            $enhancement_data['race'] = $race;
            $enhancement_data['LCH'] = $LCH;
            $enhancement_data['RCH'] = $RCH;
            $enhancement_data['Back'] = $Back;
            $this->data['enhancements'] = $this->_buildPartial('_show_enhancements', $enhancement_data);
        } else {
            $this->data['enhancements'] = '';
        }
        //$this->data['enhancements'] = $this->_buildPartial('_show_upgrades', $unit);

        $this->render();
    }
    
    function compare() {
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Compare Units';
        $this->data['pagebody'] = 'compare';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->render();
    }
    
    private function _buildVeterancyVariable($veterancy, $base_hp, $base_regen, $race) {
        
        $veterancy['race'] = $race;
        
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
    
    private function _buildAttributePartial($attributes, $key, $title) {
        $data = array();        
        if($attributes[$key] != null) {
            $data['attribute'] = $title;
            $data['value'] = $attributes[$key];
            $output = $this->parser->parse('_show_build_attribute', $data, TRUE);
        } else {
            $output = '';
        }        
        return $output;            
    }
    
    private function _buildAttributeVariable($attributes) {
        
        $attributes['att_build_rate'] = $this->_buildAttributePartial($attributes, 'att_build_rate', 'Build Rate');
        $attributes['att_build_radius'] = $this->_buildAttributePartial($attributes, 'att_build_radius', 'Build Radius');
        $attributes['att_vision_radius'] = $this->_buildAttributePartial($attributes, 'att_vision_radius', 'Vision Radius');
        $attributes['att_water_vision_radius'] = $this->_buildAttributePartial($attributes, 'att_water_vision_radius', 'Water Vision Radius');
        $attributes['att_radar_radius'] = $this->_buildAttributePartial($attributes, 'att_radar_radius', 'Radar Radius');
        $attributes['att_omni_radius'] = $this->_buildAttributePartial($attributes, 'att_omni_radius', 'Omni Radius');
        $attributes['att_sonar_radius'] = $this->_buildAttributePartial($attributes, 'att_sonar_radius', 'Sonar Radius');
        $attributes['att_combat_turn_speed'] = $this->_buildAttributePartial($attributes, 'att_combat_turn_speed', 'Combat Turn Speed');
        $attributes['att_max_speed'] = $this->_buildAttributePartial($attributes, 'att_max_speed', 'Max Speed');
        $attributes['att_turn_rate'] = $this->_buildAttributePartial($attributes, 'att_turn_rate', 'Turn Rate');
        $attributes['att_air_speed'] = $this->_buildAttributePartial($attributes, 'att_air_speed', 'Air Speed');
        $attributes['att_elevation'] = $this->_buildAttributePartial($attributes, 'att_elevation', 'Elevation');
        $attributes['att_engage_distance'] = $this->_buildAttributePartial($attributes, 'att_engage_distance', 'Engage Distance');
        $attributes['att_air_turn_speed'] = $this->_buildAttributePartial($attributes, 'att_air_turn_speed', 'Air Turn Speed');
        $attributes['att_fuel_use_time'] = $this->_buildAttributePartial($attributes, 'att_fuel_use_time', 'Fuel Use Time');
        $attributes['att_fuel_recharge'] = $this->_buildAttributePartial($attributes, 'att_fuel_recharge', 'Fuel Recharge');
        
        return $attributes;
    }
    
    private function _hasEcoAttributes($attributes) {
        if($attributes['att_build_rate'] != '') {
            return true;
        }
        if($attributes['att_build_radius'] != '') {
            return true;
        }
        return false;
    }
    
    private function _hasDetectionAttributes($attributes) {
        if(($attributes['att_vision_radius'] != '') || 
                ($attributes['att_water_vision_radius'] != '') || 
                ($attributes['att_radar_radius'] != '') ||
                ($attributes['att_omni_radius'] != '') ||
                ($attributes['att_sonar_radius'] != '')) {
            return true;
        }           
        return false;        
    }
    
    private function _hasMovementAttributes($attributes) {
        if(($attributes['att_combat_turn_speed'] != '') ||
                ($attributes['att_max_speed'] != '') || 
                ($attributes['att_turn_rate'] != '') || 
                ($attributes['att_air_speed'] != '') || 
                ($attributes['att_elevation'] != '') || 
                ($attributes['att_engage_distance'] != '') || 
                ($attributes['att_air_turn_speed'] != '') || 
                ($attributes['att_fuel_use_time'] != '') || 
                ($attributes['att_fuel_recharge'] != '')) {
            return true;
        }
        return false;
    }
    
    private function _buildPartial($partial, $unit) {
        $output = $this->parser->parse($partial, $unit, TRUE);
        return $output;
    }

    private function _buildLineItemsByRaceCategory($race_id, $unit_category) {
        $group_data = $this->units->getByRaceCategory_array($race_id, $unit_category);
        $output = '';
        for($i = 0; $i < sizeof($group_data); $i++) {
            $output .= $this->parser->parse('_all_line_items', $group_data[$i], TRUE);
        }
        return $output;
    }
    
    private function _buildLineItemsByRaceCategoryTier($race_id, $unit_category, $unit_tier) {
         $group_data = $this->units->getByRaceCategoryTier_array($race_id, $unit_category, $unit_tier);
        $output = '';
        for($i = 0; $i < sizeof($group_data); $i++) {
            $output .= $this->parser->parse('_all_line_items', $group_data[$i], TRUE);
        }
        return $output;
    }
    
    private function _buildCategoryRow($unit_category, $unit_tier) {      
        
        $include_row_splitter = ($unit_tier > 1 ? "tier-splitter" : "");       
        
        $row_data = array(
            "aeon_data" => $this->_buildLineItemsByRaceCategoryTier(1, $unit_category, $unit_tier),
            "cybran_data" => $this->_buildLineItemsByRaceCategoryTier(2, $unit_category, $unit_tier),
            "uef_data" => $this->_buildLineItemsByRaceCategoryTier(3, $unit_category, $unit_tier),
            "seraphim_data" => $this->_buildLineItemsByRaceCategoryTier(4, $unit_category, $unit_tier),
            "row_split" => $include_row_splitter
            );
        
        $output = $this->parser->parse('_all_category_row', $row_data, TRUE);
        return $output;
    }
    
    private function _buildRaceLineItem($unit) {
        $output = $this->parser->parse('_race_line_item', $unit, TRUE);
        return $output;
    }
    
    private function _buildRaceCategory($units) {
        $output = '';
        for($i = 0; $i < sizeof($units); $i++) {
            $units[$i]['unit_health'] = number_format($units[$i]['unit_health']);
            $units[$i]['unit_mass_cost'] = number_format($units[$i]['unit_mass_cost']);
            $units[$i]['unit_energy_cost'] = number_format($units[$i]['unit_energy_cost']);
            $output .= $this->_buildRaceLineItem($units[$i]);
        }
        return $output;
    }

}
