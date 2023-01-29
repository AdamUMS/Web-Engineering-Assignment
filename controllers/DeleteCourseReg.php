<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteCourseReg extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('course_reg');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function deletecoursereg($course_code_reg){
		$this->load->model('course_reg');
		$this->course_reg->deleteCourseReg($course_code_reg);

		//redirect
		$this->load->view('header_logged_admin');
		$this->load->model('course');
		$data['course']=$this->course->getCourse();
		$this->load->model('course_reg');
		$data['coursereg']=$this->course_reg->getCourseReg();
		$this->load->view('courseregistrationform_view', $data);
		$this->load->view('footer');

	}


}