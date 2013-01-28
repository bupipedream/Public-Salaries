<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salaries extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getSalaries($limit, $offset) {
		$this->db->order_by("salary", "desc");
		$query = $this->db->get('salaries', $limit, $offset);
		return $query->result();
	}

	function getByLastName($last_name) {
		$this->db->where('last_name', $last_name);
		$query = $this->db->get('salaries');
		return $query->result();
	}

}