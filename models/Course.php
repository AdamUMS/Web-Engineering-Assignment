<?php

class Course extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		//echo 'constructor';
	}

	function insertNewCourse($data){
		$this->db->insert('Course',$data);
        return true;
	}

	public function getCourse(){
		$this->load->database();
		$result=$this->db->query("SELECT * FROM course");

		if ($result->num_rows()>0){
			return $result->result();
		}
		else{
			return false;
		}
	}

	public function editCourse($course_code){
		$query=$this->db->get_where('Course', ['course_code' => $course_code]);
		return $query->row();
	}

	public function updateCourse($data, $course_code){
	
		$this->db->where('course_code', $course_code);
		$this->db->update('Course', $data);
	}

	public function deleteCourse($course_code){
		return $this->db->delete('Course', ['course_code'=> $course_code]);

	}

	public function courseDetails($course_code){
		$query=$this->db->get_where('Course', ['course_code' => $course_code]);
		return $query->row();
	}
	

} //end class Course

?>
