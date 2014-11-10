<?php

/**
 * Our homepage.
 * 
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {        
        
        $this->data['title'] = 'Forged Alliance Forever - Unit Database';
        $this->data['pagebody'] = 'welcome';
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'all_splash.png';
        $this->render();
    }
    
    

}

/* End of file welcome.php */
/* Location: application/controllers/welcome.php */