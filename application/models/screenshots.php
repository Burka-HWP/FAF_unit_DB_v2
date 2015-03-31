<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of races
 *
 * @author burka
 */
class Screenshots extends _Mymodel {
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('screenshots', 'blueprint_id');
    }
    
    
    // Descriptions-specific methods
    function create() {
        // $names = $this->db->list_fields($this->_tableName);
        // $object = new StdClass;
        // foreach ($names as $name)
        //     $object->$name = "";
        // return $object;

        $newDesc = array();
        $newDesc['blueprint_id'] = "";
        $newDesc['file_name'] = "";
        $newDesc['user_id'] = "";
        return $newDesc;
    }
    
    function add($record) {
        // convert object to associative array, if needed
        // update the DB table appropriately
        // $this->db->insert($this->_tableName, $record);

        $result = $this->db->query("insert into " . $this->_tableName . 
            " (blueprint_id, file_name, user_id) values ('" . 
                $record['blueprint_id'] . "', '" . 
                $record['file_name'] . "', '" . $record['user_id'] . "')");

        return $result;

       	//redirect('/unit/' + $record['blueprint_id']);	
        
        
    }

    function uniqueCount() {
    	$result = $this->db->query('select count(distinct blueprint_id) as count from screenshots')->row_array();

    	return $result['count'];
    }

    function totalCount() {
        $result = $this->db->query('select count(*) as count from screenshots')->row_array();

        return $result['count'];
    }

    function approvedCount() {
        $result = $this->db->query('select count(distinct blueprint_id) as count from screenshots where approved = 1')->row_array();

        return $result['count'];
    }

    function pendingCount() {
        $result = $this->db->query('select count(blueprint_id) as count from screenshots where approved is null')->row_array();

        return $result['count'];
    }

    function getScrnData($bp) {
        $apprScrn = $this->db->query(
            'select * from screenshots where blueprint_id LIKE "' . $bp . '" and approved = 1')->result_array();


        

        return $apprScrn;
    }
}