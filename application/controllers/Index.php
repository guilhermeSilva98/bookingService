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

	public function index($type = null){
		$data['dining_type'] = $this->DiningModel->diningType();
		$data['country'] = $this->UserModel->country();
		$this->load->view('index/index', $data);
	}

	public function individualBooking(){
		$data['country'] = $this->UserModel->country();
		$data['dining'] = $this->DiningModel->dining();
		$data['cday'] = $this->DiningModel->cday();
		$data['seating'] = $this->DiningModel->seating();
		$this->load->view('booking/individual', $data);
	}

	public function groupBooking(){
		$data['country'] = $this->UserModel->country();
		$data['dining'] = $this->DiningModel->dining();
		$data['cday'] = $this->DiningModel->cday();
		$data['seating'] = $this->DiningModel->seating();
		$this->load->view('booking/group', $data);
	}

	public function checkBooking(){
		$this->UserModel->tempBooking();
		redirect('bookingService/'.$this->input->get('bookingType'));
	}
}

 ?>