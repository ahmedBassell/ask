<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer extends CI_Controller {

	public function index()
	{
		$this->load->view('developers');
	}
	public function developers()
	{
		$this->load->view('developers');
	}

	public function add()
	{
		$submit = $this->input->post('submit');
		if(!empty($submit))
		{
			$firstName = $this->input->post('first_name');
			$lastName = $this->input->post('last_name');
			$age = $this->input->post('age');

			$row = 
			array(
					'first_name' 	=> $firstName,
					'last_name' 	=> $lastName,
					'age' 			=> $age,
					'date' 			=> date('m/d/Y h:i:s a', time())
				);
			$this->load->model('developers_model');
			echo $this->developers_model->insert($row) ? 'record added successfully':'failure';
		}
		$this->load->view('developers');
	}
}
