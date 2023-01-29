<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CourseDetails extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('Course');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('header_logged_admin');
		$this->load->view('coursedetailsform_view');
		$this->load->view('footer');

	}

	public function coursedetails($course_code){
		$this->load->view('header');

		$this->load->model('Course');
		$data['course']=$this->Course->courseDetails($course_code);

		$this->load->view('coursedetailsform_view', $data);
		$this->load->view('footer');
	}

}

?>



