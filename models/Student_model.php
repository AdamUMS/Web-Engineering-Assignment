<?php 

class Student_model extends CI_model {
	public function get_data($table){
		return $this->db->get($table);
	}

	public function insert_data($data,$table){
		return $this->db->insert($table, $data);
	}

	public function check_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
						->where('username', $username)
						->where('password', md5($password))
						->limit(1)
						->get('student');

		if($result->num_rows()>0)
		{
			return $result->row();
		}else{
			return FALSE;
		}
	}

public function update_data($table, $data, $where)
{
	$this->db->where($where);
	$this->db->update($table, $data);
}

public function delete_data($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}
	
}
?>

