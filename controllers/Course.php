<?php
class Course extends CI_Controller{
	public function index()
	{
		$id=$this->session->userdata('id_student');
		$data['student_course'] = $this->db->query("SELECT * FROM student_course WHERE id_student = '$id'")->result();
			$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('course',$data);
			$this->load->view('templates/footer');
	}

	public function add_course()
	{
		$id=$this->session->userdata('id_student');
		$data['student_course'] = $this->db->query("SELECT * FROM student_course WHERE id_student = '$id'")->result();

			$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('form_add_course',$data);
			$this->load->view('templates/footer');
	}

	public function add_course_action()
	{
			$id_student=$this->session->userdata('id_student');
			$course_name = $this->input->post('course_name');
			$credit_hour = $this->input->post('credit_hour');
			$course_day = $this->input->post('course_day');
			$course_time = $this->input->post('course_time');

			$data = array(
				'id_student' =>$id_student,
				'course_name' => $course_name,
				'credit_hour' => $credit_hour,
				'course_day' => $course_day,
				'course_time' => $course_time
			);

			$this->student_model->insert_data($data, 'student_course');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Saved successfully!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('course');
	
	}

	public function update_course($id)
	{
		$id_student=$this->session->userdata('id_student');
		$where = array('id_course' => $id);
		$data['student_course']= $this->db->query("SELECT * FROM student_course WHERE id_course='$id'")->result();
		$this->load->view('templates/header');
			$this->load->view('templates/body');
			$this->load->view('form_update_course',$data);
			$this->load->view('templates/footer');
	}

	public function update_course_action()
	{
		
			$id_student=$this->session->userdata('id_student');
			
			$course_name = $this->input->post('course_name');
			$credit_hour = $this->input->post('credit_hour');
			$course_day = $this->input->post('course_day');
			$course_time = $this->input->post('course_time');

			$data = array(
				'course_name' => $course_name,
				'credit_hour' => $credit_hour,
				'course_day' => $course_day,
				'course_time' => $course_time
			);

			$where = array('id_course' => $id_student);

			

			$this->student_model->update_data('student_course', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Saved successfully!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('course');
	}

	public function delete_course($id)
	{
		$where = array ('id_course' => $id);
		$this->student_model->delete_data($where, 'student_course');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> Saved successfully!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('course');

	}
}
?>