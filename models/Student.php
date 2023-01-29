<?php

class Student extends CI_Model {

	
	

	public function _construct()
	{
		parent::__construct();
		echo 'constructor';

	}

	public function getStudent()
	{
		$query = $this->db->get('student_eva');
		return $query;
	}

	public function deleteStudent($id=NULL)
	{
		// $this->db->where("student_id", $id);
  //   $this->db->delete("student_eva");
  //   return true;
		$query = $this->db->where('student_eva_id', $id);
    return $this->db->delete('student_eva');
		
	}

	public function insertNewEva ($data){


		return $this->db->insert('student_eva', $data);


	

	 
	}

	public function insertEditEva($data){


		return $this->db->update('student_eva', $data);

	}






	

}