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
    	$result = $this->db->query('select count(distinct blueprint_id) as count from descriptions')->row_array();

    	return $result['count'];
    }

    function totalCount() {
        $result = $this->db->query('select count(*) as count from descriptions')->row_array();

        return $result['count'];
    }

    function approvedCount() {
        $result = $this->db->query('select count(distinct blueprint_id) as count from descriptions where approved = 1')->row_array();

        return $result['count'];
    }

    function pendingCount() {
        $result = $this->db->query('select count(blueprint_id) as count from descriptions where approved is null')->row_array();

        return $result['count'];
    }

    function getDescData($bp) {
        $apprDesc = $this->db->query(
            'select * from descriptions where blueprint_id LIKE "' . $bp . '" and approved = 1')->row_array();
        $descCount = $this->db->query(
            'select count(*) as "count" from descriptions where blueprint_id LIKE "' . $bp . '"')->row_array();
        $result['apprDesc'] = $apprDesc;
        $result['descCount'] = $descCount;

        return $result;
    }

    function getTenForAdmin() {
        $result = $this->db->query('select d.desc_id, d.blueprint_id, LOWER(r.race_name) as race_name, u.unit_class, u.unit_tier, u.unit_name, d.user_id, d.submitted_on, d.description from descriptions d join units u on d.blueprint_id = u.blueprint_id join races r on u.unit_race = r.race_id where approved is null order by submitted_on asc limit 10')->result_array();
        return $result;
    }

    function approveDesc($desc_id) {
        $result = $this->db->query('update descriptions set approved = 1 where desc_id = ' . $desc_id);

        return $result;
    }

    function declineDesc($desc_id) {
        $result = $this->db->query('update descriptions set approved = 0 where desc_id = ' . $desc_id);

        return $result;
    }
}