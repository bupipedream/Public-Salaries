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

    function getByName($name, $limit, $offset) {
        $this->db->like("last_name", $name);
        $this->db->or_like("first_name", $name);
    	$query = $this->db->get('salaries', $limit, $offset);
    	return $query;
    }

    function getByTitle($title, $limit, $offset) {
        $this->db->order_by("title", "asc");
        $query = $this->db->get_where('salaries', array('title' => $title), $limit, $offset);
        return $query;
    }

    function getAllRows() {
        $query = $this->db->count_all('salaries');
        return $query;
    }
}
