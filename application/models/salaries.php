<?php

class Salaries extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getPublicSalaries($limit, $offset) {
    	$this->db->order_by("salary", "desc");
    	$query = $this->db->get('salaries', $limit, $offset);
		return $query;
    }

    function getByLastName($lastName, $limit, $offset) {
    	$this->db->order_by("first_name", "asc");
    	$query = $this->db->get_where('salaries', array('last_name' => $lastName), $limit, $offset);
    	return $query;
    }

    function getByTitle($title, $limit, $offset) {
        $this->db->order_by("title", "asc");
        $query = $this->db->get_where('salaries', array('title' => $title), $limit, $offset);
        return $query;
    }

    /*

    *** Not needed if we return the $query and call num_rows() in the controller. Was unsure of best practice? ***

    function getNumRows() {
        $str = $this->db->last_query();
        $query = $this->db->query($str);
        return $query->num_rows();
    }
    */ 

    function getAllRows() {
        $query = $this->db->count_all('salaries');
        return $query;
    }
}
