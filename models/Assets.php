<?php

class Assets extends CI_Model{

	public function __construct() {
		parent::__construct();
		//echo 'constructor';
	}

	//Create
	public function insertAsset($data)
	{
		$this->load->database();
		$this->db->insert('assets', $data);
		return true;
	}

	//Read Roms
	public function getForm(){
		$this->load->database();
		$result=$this->db->query("SELECT * FROM form INNER JOIN assets ON form.asset_id = assets.asset_id");
		if ($result->num_rows()>0){
			return $result->result();
		}
		else{
			return false;
		}
	}

	//Read Assets
	public function getAssets(){
		$this->load->database();
		$result=$this->db->query("SELECT * FROM assets");

		if ($result->num_rows()>0){
			return $result->result();
		}
		else{
			return false;
		}
	}


	//Update
	public function approveRequest($data, $course_code){
		
		$data = 1;
		$this->db->where('asset_id', $asset_id);
		$this->db->update('status', ['status'=> $data]);
	}

	//Delete
    public function deleteAsset($asset_id){
		return $this->db->delete('assets', ['asset_id'=> $asset_id]);

	}
}
?>

<!-- http://localhost/group_project/AssetManage/ -->