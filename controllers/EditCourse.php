<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditCourse extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('Course');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('header_logged_admin');
		$this->load->view('editcourseform_view');
		$this->load->view('footer');

	}

	public function editcourse($course_code){
		$this->load->view('header_logged_admin');

		$this->load->model('Course');
		$data['course']=$this->Course->editCourse($course_code);

		$this->load->view('editcourseform_view', $data);
		$this->load->view('footer');
	}

	public function updatecourse($course_code){

		//form validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('course_code', 'Course Code', 'trim|required');
		$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('course_hour', 'Course Hour', 'trim|required');

		if($this->form_validation->run()){

			$data=[
				'course_code' => $this->input->post('course_code'),
				'course_name' => $this->input->post('course_name'),
				'course_hour' => $this->input->post('course_hour')
			];
			
			$this->load->model('Course');
			$this->Course->updateCourse($data, $course_code);

			//redirect
			$this->load->view('header_logged_admin');
			$this->load->model('course', '', TRUE);
			$data['course']=$this->course->getCourse();
			$this->load->view('managecourseform_view', $data);
			$this->load->view('footer');
		}
		else{
			//field validation failed , redirect
			$this->load->view('header_logged_admin');
			$this->load->model('course', '', TRUE);
			$data['course']=$this->course->getCourse();
			$this->load->view('managecourseform_view', $data);
			echo "Update error !";

		}
	} 

	
} //end class EditCourse

?>



