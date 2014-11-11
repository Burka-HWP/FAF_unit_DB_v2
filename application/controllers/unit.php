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
        
        $this->data['race'] = $race;
        $this->data['race-logo'] = $race_lower . '_splash.png';
        $this->data['race-bg'] = $race_bg;
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - ' . $race;
        $this->data['pagebody'] = 'race';
        
        $this->render();
    }
    
    function show($blueprint_id) {
        // variables:
        $unit = $this->units->getOne($blueprint_id);
        $race_title = $this->units->getRace($unit['unit_race']);
        $race = strtolower($race_title);
        $unit['race'] = $race;
        $unit['race_name'] = $race_title;
        $shield = $this->shields->getOne($blueprint_id);
        if($shield != null) {
            $unit['sh_health'] = $shield['sh_health'];
            $unit['sh_regen'] = $shield['sh_regen'];
            $unit['shield_info'] = $this->_buildPartial('_show_shields', $unit);
        } else {
            $unit['shield_info'] = '';
        }
        

                
        $this->data['race'] = $race;
        $this->data['race-logo'] = $race . '_splash.png';
        $this->data['race-bg'] = $race . '-bg';
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - ' . $race_title;
        $this->data['pagebody'] = 'show';       
    
       
        
        // load the unit basic info    
        $this->data['basic_info'] = $this->_buildPartial('_show_basic_info', $unit);

        // load unit-specific info
        $this->data['unit_spec_info'] = $this->_buildPartial('_show_unit_spec_info', $unit);

        // load veterancy
        $this->data['veterancy'] = $this->_buildPartial('_show_veterancy', $unit);

        // load attack data
        $this->data['attacks'] = $this->_buildPartial('_show_attacks', $unit);

        // load defense data
        $this->data['defenses'] = $this->_buildPartial('_show_defenses', $unit);

        // load upgrade data
        $this->data['upgrades'] = $this->_buildPartial('_show_upgrades', $unit);

        $this->render();
    }
    
    function compare() {
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Compare Units';
        $this->data['pagebody'] = 'compare';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->render();
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
    

}
