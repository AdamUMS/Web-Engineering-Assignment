<?php

class Vaccine extends CI_Controller
{
	public function index()
	{

		$id=$this->session->userdata('id_student');
		$where = array ('id_student'=>$id);
		$data['vaccine'] = $this->db->query("SELECT * FROM vaccine WHERE id_student = '$id'")->result();
		$this->load->view('templates/header');
		$this->load->view('templates/body');
		$this->load->view('vaccine',$data);
		$this->load->view('templates/footer');
	}

	public function add_vaccine()
	{
		$id=$this->session->userdata('id_student');
		$data['vaccine'] = $this->db->query("SELECT * FROM vaccine WHERE id_student = '$id'")->result();

			$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('vaccine_form',$data);
			$this->load->view('templates/footer');
	}

	public function add_record_action()
	{
		$id_student = $this->session->userdata('id_student');
		$sejahtera = $this->input->post('sejahtera');
		$status = $this->input->post('status');
		$date = $this->input->post('date');
		$vaccineName = $this->input->post('vaccineName');
		$place = $this->input->post('place');
		$batch = $this->input->post('batch');

		$data = array(
			'id_student' =>$id_student,
			'sejahtera' =>$sejahtera,
			'status' =>$status,
			'date' =>$date,
			'vaccineName' =>$vaccineName,
			'place' =>$place,
			'batch' =>$batch
		);

		$this->student_model->insert_data($data,'vaccine');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Saved successfully!.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('vaccine');

	}

	public function delete_vaccine($id)
	{
		$where = array ('id_vaccine' => $id);
		$this->student_model->delete_data($where, 'vaccine');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Saved successfully!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('vaccine');

	}

} 
?>