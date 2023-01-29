<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCourseReg extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('Course');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('coursedetailsform_view');
		$this->load->view('footer');

	}

	public function addcoursereg(){

		if($this->input->post('addcoursereg')){
			$data = $this->input->post('course_code');

			$this->load->model('course_reg');
			$this->course_reg->insertNewCourseReg($data);
		
		
			//redirect
			$this->load->view('header');
			$this->load->model('course');
			$data['course']=$this->course->getCourse();
			$this->load->model('course_reg');
			$data['coursereg']=$this->course_reg->getCourseReg();
			$this->load->view('courseregistrationform_view', $data);
			$this->load->view('footer');
		}
		
		
	}



}

?>



