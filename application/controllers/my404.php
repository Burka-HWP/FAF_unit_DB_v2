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
class my404 extends Application {
    //put your code here
    
    function index() {
        
        $this->output->set_status_header('404'); 
        
        
        $this->data['title'] = 'Forged Alliance Forever - Unit Database';
        $this->data['pagebody'] = 'error_404';        
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';   

        $this->render();
        
    }
}

