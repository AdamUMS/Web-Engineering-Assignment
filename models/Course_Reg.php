<?php

class Course_Reg extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		//echo 'constructor';
	}

	function insertNewCourseReg($data){
		$this->db->query("INSERT INTO course_reg(course_code_reg) VALUES ($data)");
		return true;
	}
	
	//BLUM FIX
	public function getCourseReg(){
		$this->load->database();

		$this->db->select("a.course_code_reg, b.course_name, b.course_hour");
	    $this->db->from("course_reg as a");
	    $this->db->join('course as b', 'a.course_code_reg = b.course_code');
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result;
	}

	public function deleteCourseReg($course_code_reg){
		return $this->db->delete('course_reg', ['course_code_reg'=> $course_code_reg]);

	}




} //end class Course_Reg

?>
