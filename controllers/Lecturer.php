<?php

class Lecturer extends CI_Controller {

  function index() { // to load the lecturer profile table 
    
    $data['title'] = 'Ryan University FCS';
    $this->load->view('header_logged_admin', $data) ;

    $this->load->model('Lecturer_model') ;
    $data['lecturer'] = $this->Lecturer_model->getLecturer() ;

    $this->load->view('list_view', $data) ;
    $this->load->view('footer') ;
  }


  function create() { // to load  create/add new form 
          $this->load->view('create_view') ;
       }



  function store()
   { //to store input data when fill the create/form into the created database
       $this->form_validation->set_rules('lecId', 'Lecturer ID Number', 'required');
       $this->form_validation->set_rules('lecName', 'Lecturer Name', 'required');
       $this->form_validation->set_rules('lecTel', 'Office Number', 'required');
       $this->form_validation->set_rules('lecEmail', ' University Email', 'required|valid_email');
       $this->form_validation->set_rules('lecPost', 'Lecturer Position', 'required');
       $this->form_validation->set_rules('lecEdu', 'Education Level', 'required');
       $this->form_validation->set_rules('lecArea', 'Area of Expertise', 'required');
       if($this->form_validation->run()) 
       {
           $data = [
             'lecId' => $this->input->post('lecId'),
             'lecName' => $this->input->post('lecName'),
             'lecTel' => $this->input->post('lecTel'),
             'lecEmail' => $this->input->post('lecEmail'),
             'lecPost' => $this->input->post('lecPost'),
             'lecEdu' => $this->input->post('lecEdu'),
             'lecArea' => $this->input->post('lecArea'),
      ] ;

       $this->load->model('Lecturer_model', 'lec');
       $this->lec->insertLecturer($data) ;
         $this->session->set_flashdata('status', 'The new lecturer record is created successfully!!!') ;
       redirect(base_url('lecturer/index')) ;

       }
       else
       {

        $this->create() ;
        //redirect(base_url('lecturer/create')) ;
       }

   }


   function edit($lecId)
    { 

      $this->load->model("Lecturer_model") ;
      $data['lecturer'] = $this->Lecturer_model->editLecturer($lecId) ;
      $this->load->view('edit_view', $data) ;
    
    }

    function update($lecId)
    {
       //$this->form_validation->set_rules('lecId', 'Lecturer ID Number', 'required');
       $this->form_validation->set_rules('lecName', 'Lecturer Name', 'required');
       $this->form_validation->set_rules('lecTel', 'Office Number', 'required');
       $this->form_validation->set_rules('lecEmail', ' University Email', 'required|valid_email');
       $this->form_validation->set_rules('lecPost', 'Lecturer Position', 'required');
       $this->form_validation->set_rules('lecEdu', 'Education Level', 'required');
       $this->form_validation->set_rules('lecArea', 'Area of Expertise', 'required');

      if($this->form_validation->run()) :
      
        $data = [
             //'lecId' => $this->input->post('lecId'),
             'lecName' => $this->input->post('lecName'),
             'lecTel' => $this->input->post('lecTel'),
             'lecEmail' => $this->input->post('lecEmail'),
             'lecPost' => $this->input->post('lecPost'),
             'lecEdu' => $this->input->post('lecEdu'),
             'lecArea' => $this->input->post('lecArea'),
        ] ;
      $this->load->model("Lecturer_model");
      $this->Lecturer_model->updateLecturer($data,$lecId) ;  
      $this->session->set_flashdata('status', 'Lecturer record updated successfully!!!') ; 
      redirect(base_url('lecturer/index')) ;
     
    else :
    
      $this->edit($lecId) ;
    endif ;
    
    
     }


     function delete($lecId)
     { // the created lecturer record will be deleted when click on the delete button according to the row id 

      $this->load->model('Lecturer_model');
      $this->Lecturer_model->deleteLecturer($lecId) ;
      //$data['lecturer'] = $this->Lecturer_model->deleteLecturer($lecId) ;
      $this->session->set_flashdata('status', 'The lecturer record deleted successfully!!!') ;
      redirect(base_url('lecturer/index')) ;

     }
   }


?>