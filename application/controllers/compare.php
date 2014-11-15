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
        
        $units = $this->units->getAll_array();       
        
        $unit1['unit'] = 'unit1';
        $unit1['options'] = $unit2['options'] = $this->_buildAllOptionItems($units);      
        $unit2['unit'] = 'unit2';       
        
        $this->data['script'] = $this->parser->parse('_script', $unit1, TRUE);
        
        $this->data['unit1'] = $this->parser->parse('_form_build_unit_block', $unit1, TRUE);
        $this->data['unit2'] = $this->parser->parse('_form_build_unit_block', $unit2, TRUE);
        
        $this->render();
    }
    
    function compareUnits() {
        
        $unit1_bp = $_POST['unit1_bp'];
        $unit2_bp = $_POST['unit2_bp'];       
        
        redirect('/compare/twoUnits/' . $unit1_bp . '/' . $unit2_bp);
        //$this->twoUnits($unit1_bp, $unit2_bp);
    }
    
    function twoUnits($bp1, $bp2) {
        $unit1 = $this->units->getOne($bp1);
        $unit2 = $this->units->getOne($bp2);        
        
        $root_dir = "fafunitdb.local/";
        $hard_link = $root_dir . "compare/twoUnits/" . $bp1 . "/" . $bp2;


        $this->data['unit1_bp'] = $unit1['blueprint_id'];
        $this->data['unit2_bp'] = $unit2['blueprint_id'];
        $this->data['hard_link'] = $hard_link;

        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Compare 2 Units';
        $this->data['pagebody'] = 'compare_display';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->render();
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
    
}
