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
    
    function description($blueprint_id) {
      $this->data['title'] = 'Forged Alliance Forever - Unit Database';
      $this->data['pagebody'] = 'description';          
      $this->data['race-bg'] = 'welcome-bg';
      $this->data['race-logo'] = 'home_splash.png';
      $this->data['quick-nav'] = null;   

      $unit = $this->units->getOne($blueprint_id);
        if($unit == null) {
            redirect('/');
        }

      $this->data['blueprint_id'] = $unit['blueprint_id'];
      $race_title = $this->units->getRace($unit['unit_race']);
      $this->data['race'] = strtolower($race_title);
      $this->data['unit_name'] = $unit['unit_name'];
      $this->data['unit_class'] = $unit['unit_class'];
      $this->data['tech'] = $unit['tech'];

      $this->render();



      // redirect('/');
    }

    function screenshot($blueprint_id) {
      $this->data['title'] = 'Forged Alliance Forever - Unit Database';
      $this->data['pagebody'] = 'screenshot';          
      $this->data['race-bg'] = 'welcome-bg';
      $this->data['race-logo'] = 'home_splash.png';
      $this->data['quick-nav'] = null;   

      $unit = $this->units->getOne($blueprint_id);
        if($unit == null) {
            redirect('/');
        }

      $this->data['blueprint_id'] = $unit['blueprint_id'];
      $race_title = $this->units->getRace($unit['unit_race']);
      $this->data['race'] = strtolower($race_title);
      $this->data['unit_name'] = $unit['unit_name'];
      $this->data['unit_class'] = $unit['unit_class'];
      $this->data['tech'] = $unit['tech'];

      $this->render();
      
      
    }

    function submitScrn($blueprint_id) {
      $config['upload_path'] ='./assets/images/uploads';
      $config['allowed_types'] = "gif|jpg|png|jpeg";
      $config['overwrite'] = FALSE;
      $config['remove_spaces'] = TRUE;
      $config['file_name'] = $blueprint_id . '_' . ((int) rand(100000000,999999999));
      $config['max_size'] = 200;


      $this->load->helper(array('form', 'url'));        
      $this->load->library('upload', $config);            
      
      if ( ! $this->upload->do_upload())
      {
        // upload failed
        redirect('/asd');
      }
      else
      {
        //success, rename and store to db
        $file_data = $this->upload->data();
        $record = $this->screenshots->create();
        $record['blueprint_id'] = $blueprint_id;
        $record['file_name'] = $file_data['file_name'];
        $record['user_id'] = $this->session->all_userdata()['userID'];

        if(!$this->screenshots->add($record)) {
          //fail to record
          redirect('/assd');
        } else {
          redirect('/unit/'. $blueprint_id);
        }

        
      }
    }


    function submitDesc($blueprint_id) {
        $record = $this->descriptions->create();
        $record['blueprint_id'] = $blueprint_id;
        $record['description'] = $_POST['description'];
        $record['description'] = addslashes($record['description']);
        $record['user_id'] = $this->session->all_userdata()['userID'];
        $record = $this->security->xss_clean($record);
        // do some error handling on input
        // add the record if all ok
        $result = $this->descriptions->add($record);        
        $route = "";
        if($result) {
            // successful insertion
            $route = '/unit/' . $blueprint_id;    
        } else {
            // insertion failed
            $route = '/';
        }
        redirect($route);      
    }
}
