<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluation extends CI_Controller {
	
	function __construct(){

		parent::__construct();

		$this->load->model('Student','',TRUE);
		$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');

	}


	public function index()
	{
		$this->load->view('header');
		$this->load->view('evaform_view');
		//$data['student_eva'] = $this->Student->getStudent();
		$this->load->view('footer');
	}

	public function viewEva()
	{
		$this->load->database();
		$this->load->model('Student');
		$data['getStudent']=$this->Student->getStudent();
		$this->load->view('header');
		$this->load->view('view_eva', $data);
		
		$this->load->view('footer');
	}

	public function deleteEva()
	{

		// $this->load->database();
  //       $this->load->model('Student');
  //       $id=$this->input->get('student_eva_id');
  //       $this->Student->deleteStudent($id);
		$this->load->database();
		$this->load->model('Student');
		$id['deleteStudent']=$this->Student->deleteStudent();
		$this->load->view('header');
		$this->load->view('evaform_view');
		
		$this->load->view('footer');
	
	}






	public function addneweva() {

		//Sign up form validation
		 $this->load->library('form_validation');
	
		$this->form_validation->set_rules("student_name", "Student Name", 'trim|required');

		$this->form_validation->set_rules("student_id", "Matric Number", 'trim|required');

		$this->form_validation->set_rules("sem_session", "Current Session", 'trim|required');

		$this->form_validation->set_rules("course_code", "Course Code", 'trim|required');

		$this->form_validation->set_rules("section_no", "Section", 'trim|required');
		$this->form_validation->set_rules("rating", "Rate", 'trim|required');

		


		if($this->form_validation->run())
		{
			$this->load->model("Student");


		
			$data = array(
			'student_name' => $this->input->post('student_name'),
			'student_id' => $this->input->post('student_id'),
			'sem_session' => $this->input->post('sem_session'),
			'course_code' => $this->input->post('course_code'),
			'section_no' => $this->input->post('section_no'),
			'rating' => $this->input->post('rating')
			
		);

			$this->Student->insertNewEva($data);
			$this->load->view('header');
			$this->load->view('evaform_view');
			$this->load->view('footer');
			
		}
		else
		{
			$this->index();
		}

		
		
	
	}//end 
		public function editeva() {

		//Sign up form validation
		 $this->load->library('form_validation');
		
		$this->form_validation->set_rules("student_name", "Student Name", 'trim|required');

		$this->form_validation->set_rules("student_id", "Matric Number", 'trim|required');

		$this->form_validation->set_rules("sem_session", "Current Session", 'trim|required');

		$this->form_validation->set_rules("course_code", "Course Code", 'trim|required');

		$this->form_validation->set_rules("section_no", "Section", 'trim|required');
		$this->form_validation->set_rules("rating", "Rate", 'trim|required');

	

		
			$this->load->model("Student");


			$data = array(
			'student_name' => $this->input->post('student_name'),
			'student_id' => $this->input->post('student_id'),
			'sem_session' => $this->input->post('sem_session'),
			'course_code' => $this->input->post('course_code'),
			'section_no' => $this->input->post('section_no'),
			'rating' => $this->input->post('rating')
			
		);

			$this->Student->insertEditEva($data);
			$this->load->view('header');
			$this->load->view('edit');
			$this->load->view('footer');
			
		

	
	
	}

	
	
}
