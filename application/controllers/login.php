<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author burka
 */
class Login extends Application {
    //put your code here
    function index() {
        $this->data['title'] = 'Forged Alliance Forever - Unit Database';
        $this->data['pagebody'] = 'login';          
        $this->data['race-bg'] = 'welcome-bg';
        $this->data['race-logo'] = 'home_splash.png';
        $this->data['quick-nav'] = null;     
        $this->render();
    }
    /*
     * submit()
     * 
     * default code that was pulled from lab 9. checks and logs in a user.
     */
    function submit() {
        $key = $_POST['user_id'];
        $password = md5($_POST['password']);
        $user = $this->users->getOne($key);
        // echo(var_dump($user));
        if($password == $user['password']) {
            $this->session->set_userdata('userID', $key);
            $this->session->set_userdata('userFaction', $user['user_faction']);
            $this->session->set_userdata('userRole', $user['role']);
            $this->load->helper('url');
            redirect('/');
        } else {            
            $this->load->helper('url');
            redirect('/login');
        }
    }
}
