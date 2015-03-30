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
class feedback extends Application {

    
    //put your code here
    function index() {
      redirect('/');
    }

    function submit() {
     // redirect('/');
      $record['feedback'] = $_POST['feedback'];
      $record['feedback'] = addslashes($record['feedback']);
      $record['user_id'] = 'Guest';
      $record = $this->security->xss_clean($record);

      $user = $this->session->all_userdata();
      
      if(array_key_exists('userID', $user)) {
        $record['user_id'] = $user['userID'];
      }

      $result = $this->feedbacks->add($record);

      if($result) {
        redirect('/feedback/thanks');
      } else {
        redirect('/asdfasdfa');
      }
    }

    function thanks() {
      $this->data['title'] = 'Forged Alliance Forever - Unit Database';
      $this->data['pagebody'] = 'fb_thanks';        
      $this->data['race-bg'] = 'welcome-bg';
      $this->data['race-logo'] = 'home_splash.png';
      $this->data['quick-nav'] = null;      

      $this->render();
    }

    
}
