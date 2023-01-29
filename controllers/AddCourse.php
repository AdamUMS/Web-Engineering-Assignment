<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCourse extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('Course');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('header_logged_admin');
		$this->load->view('addcourseform_view');
		$this->load->view('footer');

	}

	public function addnewcourse(){
		//form validation
		$this->load->library('form_validation');
		//$data ['content'] = "formAddCourse";

		$this->form_validation->set_rules('course_code', 'Course Code', 'trim|required');
		$this->form_validation->set_rules('course_name', 'Course Name', 'trim|required');
		$this->form_validation->set_rules('course_hour', 'Course Hour', 'trim|required');


		if($this->form_validation->run() == FALSE){
			//field validation failed , redirect
			echo "Insert error !";
			$this->load->view('header');
			$this->load->view('addcourseform_view', $data);
			$this->load->view('footer');
			
		} 
		else
		{
			//success
			/*Check submit button */
			if($this->input->post('save'))
			{
				$data=[
				'course_code' => $this->input->post('course_code'),
				'course_name' => $this->input->post('course_name'),
				'course_hour' => $this->input->post('course_hour')
			];
			

				$this->Course->insertNewCourse($data);

				//redirect
				$this->load->view('header');
				$this->load->model('course', '', TRUE);
				$data['course']=$this->course->getCourse();
				$this->load->view('managecourseform_view', $data);
				$this->load->view('footer');
			}
		}
	}
} //end class AddCourse

?>