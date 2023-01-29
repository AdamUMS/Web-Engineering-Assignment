<?php 

class Register extends CI_Controller {

	public function index()
	{

		$this->_rules();

		if($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header');
			$this->load->view('register_form');
		}else {
			$nama =$this->input->post('nama');
			$username =$this->input->post('username');
			$alamat =$this->input->post('alamat');
			$gender =$this->input->post('gender');
			$no_telepon =$this->input->post('no_telepon');
			$no_student =$this->input->post('no_student');
			$password =md5($this->input->post('password'));
			

			$data=array(
				'nama' => $nama,
				'username' => $username,
				'alamat' => $alamat,
				'gender' => $gender,
				'no_telepon' => $no_telepon,
				'no_student' => $no_student,
				'password' => $password,
				
			);

			$this->student_model->insert_data($data, 'student');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Register Successfully. Please Login!.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');
		}
		
	}

		public function _rules()
		{
			$this->form_validation->set_rules('nama', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('alamat', 'Address', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('no_telepon', 'Phone Number', 'required');
			$this->form_validation->set_rules('no_student', 'Matric Number', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		}
}
?>

