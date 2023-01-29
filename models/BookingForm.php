<?php
class BookingForm extends CI_Model {

	public function __construct(){
		parent::__construct();
		//echo 'constructor';
	}

	function insertNewBooking($data)
	{
		$this->db->insert('form', $data);
	}

}
?>
