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
class logout extends Application {
    //put your code here
    function index() {
        $this->session->sess_destroy();
        $this->load->helper('url');
        redirect('/');
    }
}
