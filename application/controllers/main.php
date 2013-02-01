<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

 	public function index()
	{
		$this->load->model('salaries');

		$config['base_url'] = 'http://localhost/Public-Salaries/index.php/main/index/';
		$config['per_page'] = 20;
		$config['total_rows'] = $this->salaries->countAllRows();
		$config['num_links'] = 9;

		$offset = 0;
		if($this->uri->segment(3)){
			$offset = $this->uri->segment(3);
		}

		$query  = $this->salaries->getPublicSalaries($config['per_page'], $offset);

		$this->pagination->initialize($config);

		$data = array(
			'salaries' 	=> $query->result(),
			'offset'	=> $offset + 1,
			'num_rows' 	=> $offset + $query->num_rows(),
			'all_rows' 	=> $config['total_rows']
		);

		$this->load->view('main', $data);

	}

}