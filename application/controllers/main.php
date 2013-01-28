<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

 	public function index()
	{
		$this->load->model('Salaries');

		$data = array('salaries' => $this->Salaries->getSalaries(20, 0));

		$this->load->view('main', $data);
	}

	public function about() {
		echo "hello";
	}

}