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

      $user = $this->session->userdata('userID');
      $this->data['user'] = $user;

      $this->data['screenshots'] = $this->screenshots->getTenForAdmin($user);
      $this->data['descriptions'] = $this->descriptions->getTenForAdmin($user);

      $this->render();
    }

    function approveScrn($scrn_id) {
      $result = $this->screenshots->approveScrn($scrn_id);
      if($result) {
        $this->load->view('_approve');
      }          
    }

    function declineScrn($scrn_id) {
      $result = $this->screenshots->declineScrn($scrn_id);
      if($result) {
        $this->load->view('_decline');
      }          
    }

    function approveDesc($desc_id) {
      $result = $this->descriptions->approveDesc($desc_id);
      if($result) {
        $this->load->view('_approve');
      }          
    }

    function declineDesc($desc_id) {
      $result = $this->descriptions->declineDesc($desc_id);
      if($result) {
        $this->load->view('_decline');
      }          
    }

    
}
