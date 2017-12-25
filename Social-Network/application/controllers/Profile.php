<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->view('ProfileView');
		
	}
	public function InsertPost($id){

	}

}

/* End of file ShowDataProfile.php */
/* Location: ./application/controllers/ShowDataProfile.php */