<?php

class Salaries extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getPublicSalaries($limit, $offset) {
    	$this->db->order_by("salary", "desc");
    	$query = $this->db->get('salaries', $limit, $offset);
		return $query->result();
    }

    function getByLastName($lastName, $limit, $offset) {
    	$this->db->order_by("first_name", "asc");
    	$query = $this->db->get_where('salaries', array('last_name' => $lastName), $limit, $offset);
    	return $query->result();
    }
}
