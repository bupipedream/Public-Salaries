<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

 	public function index()
	{
		$this->load->model('salaries');

		$offset = 0;
		$query  = $this->salaries->getPublicSalaries(20, $offset);

		$data = array(
			'salaries' 	=> $query->result(),
			'offset'	=> $offset,
			'num_rows' 	=> $query->num_rows(),
			'all_rows' 	=> $this->salaries->getAllRows()
		);

		$this->load->view('main', $data);

	}

}