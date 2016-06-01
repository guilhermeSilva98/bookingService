<?php 

/**
* index class
*/
class Index extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('DiningModel');
		$this->load->model('UserModel');
	}

	public function index(){
		$data['dining_type'] = $this->DiningModel->diningType();
		$data['country'] = $this->UserModel->country();
		$data['dining'] = $this->DiningModel->dining();
		$data['cday'] = $this->DiningModel->cday();
		$data['seating'] = $this->DiningModel->seating();
		$this->load->view('index/index', $data);
	}
}

 ?>