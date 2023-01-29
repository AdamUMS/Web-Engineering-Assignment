<?php
class Dashboard extends CI_Controller{
	public function index()
	{
			$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('index');
			$this->load->view('templates/footer');
	}

}
?>