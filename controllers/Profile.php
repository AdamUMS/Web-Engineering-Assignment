<?php 

class Profile extends CI_Controller{
	public function index()
	{
		$id=$this->session->userdata('id_student');

		$data['student'] = $this->db->query("SELECT * FROM student WHERE id_student='$id'")->result();

		// var_dump($data);
		// die();
		
			$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('profile',$data);
			$this->load->view('templates/footer');
	}



}
?>