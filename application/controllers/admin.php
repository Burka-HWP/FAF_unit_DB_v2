<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author burka
 */
class admin extends Application {

    function __construct() {
      parent::__construct();
      $this->restrict('Admin');
    }

    //put your code here
    function index() {
      $this->data['title'] = 'Forged Alliance Forever - Unit Database';
      $this->data['pagebody'] = 'admin';          
      $this->data['race-bg'] = 'welcome-bg';
      $this->data['race-logo'] = 'home_splash.png';
      $this->data['quick-nav'] = null;

      $this->data['screenshots'] = $this->screenshots->getTenForAdmin();
      $this->data['descriptions'] = $this->descriptions->getTenForAdmin();

      $this->render();
    }

    function approveScrn($scrn_id) {
      $result = $this->screenshots->approveScrn($scrn_id);
      if($result) {
        $this->load->view('_scrn_approve');
      }          
    }

    function declineScrn($scrn_id) {
      $result = $this->screenshots->declineScrn($scrn_id);
      if($result) {
        $this->load->view('_scrn_decline');
      }          
    }

    
}
