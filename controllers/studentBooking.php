<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentBooking extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('studentBooking_view');
		$this->load->view('footer');
	}

	function addBooking() {
		//form validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Enter your name', 'trim|required');
		$this->form_validation->set_rules('studentId', 'Enter your Matric Number', 'trim|required');
		$this->form_validation->set_rules('emailid', 'Enter your email address', 'trim|required|valid_email');
		$this->form_validation->set_rules('phoneNumber', 'e.g. 0000000000', 'trim|required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('asset', '', 'trim|required');
		$this->form_validation->set_rules('dateStart', 'mm/dd/yyyy', 'trim|required');
		$this->form_validation->set_rules('dateEnd', 'mm/dd/yyyy', 'trim|required');
		$this->form_validation->set_rules('time', '00:00-00:00', 'trim|required');

		if($this->form_validation->run()==TRUE){
			//true
			$this->load->model('BookingForm');
			$data = array('name' =>$this->input->post('name'),
				          'studentId' =>$this->input->post('studentId'),
				          'emailid' =>$this->input->post('emailid'),
				          'phoneNumber' =>$this->input->post('phoneNumber'),
				          'asset' =>$this->input->post('asset'),
				          'dateStart' =>$this->input->post('dateStart'),
				          'dateEnd' =>$this->input->post('dateEnd'),
				          'time' =>$this->input->post('time')
				      );

			$this->BookingForm->insertNewBooking($data);

			//redirect
			redirect('studentBooking/addBooking');		
		}
		else
		{
			//false
			$this->load->view('header');
			$this->load->view('studentBooking_view');
			$this->load->view('footer');
		}
	}

}

?>