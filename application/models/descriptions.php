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
class Descriptions extends _Mymodel {
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->setTable('descriptions', 'blueprint_id');
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
        $newDesc['description'] = "";
        return $newDesc;
    }
    
    function add($record) {
        // convert object to associative array, if needed
        // update the DB table appropriately
        // $this->db->insert($this->_tableName, $record);

        $result = $this->db->query("insert into " . $this->_tableName . 
            " (blueprint_id, description, user_id) values ('" . 
                $record['blueprint_id'] . "', '" . 
                $record['description'] . "', '" . $record['user_id'] . "')");

        return $result;
       	//redirect('/unit/' + $record['blueprint_id']);	
        
        
    }

    function uniqueCount() {
    	$result = $this->db->query('select count(distinct blueprint_id) as count from descriptions')->result_array();

    	return $result[0]['count'];
    }
}