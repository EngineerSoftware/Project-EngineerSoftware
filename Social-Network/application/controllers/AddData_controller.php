<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		//echo 'Test Create';
		
		//$this->load->model('InteractiveDataPost');
		//$id_user='5a35e17dd7d69e7bfb31379e';
		//$Result= $this->InteractiveDataPost->getPost($id_user);
		$this->load->view('TimeLineView');
	}
	public function inserData_controller()
	{


		
	}

}

/* End of file AddData_controller.php */
/* Location: ./application/controllers/AddData_controller.php */