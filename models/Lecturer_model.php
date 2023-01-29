<?php

class Lecturer_model extends CI_Model {

	//write query to fetch data from db 
	public function getLecturer()
	{
       $query = $this->db->get('lecturers') ;
       return $query->result();
	}


	 function insertLecturer($data) // insert new lecturer record in db after fill in the create/add lecturer form
	{
		return $this->db->insert('lecturers', $data) ;
	}


	function editLecturer($lecId) // edit the created lecturer record in index after click on the edit button 
	{
       $query = $this->db->get_where('lecturers', ['lecId => $lecId']) ;
       return $query->row();
	}

	function updateLecturer($data,$lecId)
	{
		return $this->db->update('lecturers', $data, ['lecId =>$lecId']);
	}


	function deleteLecturer($lecId)
	{
		return $this->db->delete('lecturers', ['lecId => $lecId']);
		//$query = $this->db->get_where('lecturers', ['lecId' => $lecId]) ;
		//return $query->row();
	}

    
   
}