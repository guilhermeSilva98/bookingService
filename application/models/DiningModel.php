<?php 
/**
* 
*/
class DiningModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function diningType($id = null){
		if($id !== null)
			$this->db->where('id', $id);
		$sel = $this->db->get('dining_type');
		return $sel->result();
	}

	function dining(){
		$this->db->select('dining.id, seating.id as seatingId, dining_type.id as dining_type, cday.id as compDay');
		$this->db->join('seating', 'dining.seating_id = seating.id');
		$this->db->join('dining_type', 'seating.dining_type_id = dining_type.id');
		$this->db->join('cday', 'cday.id = dining.cday_id');
		$this->db->order_by('cday.name, dining_type.id');
		// $this->db->group_by('cday.id');
		$sel = $this->db->get('dining');
		return $sel->result();
	}

	function cday(){
		$sel = $this->db->get('cday');
		return $sel->result();
	}

	function seating(){
		$this->db->select('seating.*, dining_type.name');
		$this->db->join('dining_type', 'dining_type.id = seating.dining_type_id');
		$sel = $this->db->get('seating');
		return $sel->result();
	}
}
 ?>