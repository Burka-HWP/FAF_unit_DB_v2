<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of races
 *
 * @author burka
 */
class Races extends _Mymodel {
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('races', 'race_id');
    }
    
    
    // Race-specific methods
    
    
}
