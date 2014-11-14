<?php

/**
 * Our homepage.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Credits extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {        
        
        $this->data['title'] = 'Forged Alliance Forever - Unit Database - Credits';
        $this->data['pagebody'] = 'credits';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'compare_splash.png';
        $this->render();
    }
    
    

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */