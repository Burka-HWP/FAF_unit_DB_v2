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
class contribute extends Application {

    function __construct() {
      parent::__construct();
      $this->restrict(['User', 'Admin']);
    }

    //put your code here
    function index() {
      redirect('/');
    }

    function feedback() {
     // redirect('/');
      $record['feedback'] = $_POST['feedback'];
      $record['user_id'] = 'Guest';

      $result = $this->feedbacks->add($record);

      if($result) {
        redirect('/');
      } else {
        redirect('/asdfasdfa');
      }
    }

    function correction() {

    }
    
    function description() {

    }

    function screenshot() {

    }


    function submitDesc() {
        $record = $this->descriptions->create();
        $record['blueprint_id'] = $_POST['blueprint_id'];
        $record['description'] = $_POST['description'];
        $record['user_id'] = $this->session->all_userdata()['userID'];
        // do some error handling on input
        // add the record if all ok
        $result = $this->descriptions->add($record);        
        $route = "";
        if($result) {
            // successful insertion
            $route = '/unit/' . $bp;    
        } else {
            // insertion failed
            $route = '/';
        }
        redirect($route);      
    }
}
