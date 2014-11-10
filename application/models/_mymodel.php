<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of _mymodel
 *
 * @author burka
 */
class _Mymodel extends CI_Model {
    
    var $_tableName; // database table to use.
    var $_keyField; // name of the primary key.
    
    // Constructor
    function __construct() {
        parent::__construct();
        $this->_tableName = get_class($this);
    }
    
    // Table Management
    function setTable($table, $key) {
        $this->_tableName = $table;
        $this->_keyField = $key;
    }
    
    function getFields() {
        return $this->db->list_fields($this->_tableName);
    }
    
    // Data Access Methods
    function getAll_array() {
        //$this->db->order_by($this->_keyField, 'asc');
        $query = $this->db->get($this->_tableName);
        return $query->result_array();
    }
    
    
    
    
    
    
}
