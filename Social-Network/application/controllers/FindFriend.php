<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FindFriend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('FindFriendView');
		
	}

}

/* End of file ShowDataFindFriend.php */
/* Location: ./application/controllers/ShowDataFindFriend.php */