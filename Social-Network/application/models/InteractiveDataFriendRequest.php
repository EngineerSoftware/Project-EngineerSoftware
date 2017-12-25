<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataFriendRequest extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetFriendRequest($IdUser){
		$this->load->library('mongodb');
		$result = $this->mongodb->where($IdUser)->get('friend_request')->result();
		return $result;
	}
	public function InsertFriendRequest(){
		
	}
	public function UpdateFriendRequest(){
		
	}

}

/* End of file InteractiveDataFriendRequest.php */
/* Location: ./application/models/InteractiveDataFriendRequest.php */