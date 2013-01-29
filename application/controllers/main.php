<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

 	public function index()
	{
		$this->load->model('salaries');
		
		$data = array(
			'salaries' => $this->salaries->getPublicSalaries(20, 0),
		);
		$this->load->view('main', $data);

	}

}