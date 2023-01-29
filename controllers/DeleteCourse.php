<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteCourse extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Course');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function deletecourse($course_code){
		$this->load->model('Course');
		$this->Course->deleteCourse($course_code);

		//redirect
		$this->load->view('header_logged_admin');
		$this->load->model('course', '', TRUE);
			$data['course']=$this->course->getCourse();
			$this->load->view('managecourseform_view', $data);
		$this->load->view('footer');

	}


}