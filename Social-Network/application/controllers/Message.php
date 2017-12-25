<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		 $id='5a35e17dd7d69e7bfb31379e';
        $this->load->model('InteractiveDataStatus');
        $Data['id']=$this->InteractiveDataStatus->GetStatus($id);
        
        $this->load->view('MessageView',$Data);

		//$this->load->view('MessageView');	
	}

}

/* End of file ShowDataMessage.php */
/* Location: ./application/controllers/ShowDataMessage.php */