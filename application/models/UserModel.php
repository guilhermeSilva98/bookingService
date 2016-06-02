<?php 
/**
* 
*/
class UserModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function country(){
		$sel = $this->db->get('country');
		return $sel->result();
	}

	function tempBooking(){
		$name = $this->input->get('name');
		$organization = $this->input->get('organization');
		$email = $this->input->get('email');
		$phone = $this->input->get('phone');
		$country = $this->input->get('country');
		$dados = array(
			'id' => null,
			'name' => $name,
			'organization' => $organization,
			'email' => $email,
			'phone' => $phone,
			'country_id' => $country
		);
		$this->db->insert('booking', $dados);
		return $this->db->insert_id();
	}
}
 ?>