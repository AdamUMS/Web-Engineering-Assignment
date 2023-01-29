<?php 

class Auth extends CI_Controller{
	public function login()
	{
		$this->_rules();

		if($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header');
			$this->load->view('form_login');
		}else {
			$username =$this->input->post('username');
			$password =md5($this->input->post('password'));

			$check = $this->student_model->check_login($username, $password);


			if ($check==FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Wrong Username or Password!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');
			}else {
				$this->session->set_userdata('username', $check->username);
				$this->session->set_userdata('nama', $check->nama);
				$this->session->set_userdata('id_student', $check->id_student);
				$this->session->set_userdata('id_course', $check->id_course);

				redirect('dashboard');
			}
		}	
	} //end login function

	public function _rules()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	
}
?>