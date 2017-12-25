<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataFriendRelation extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetFriendRelation($IdUser){
		$this->load->library('mongodb');
		$Temp=array('id1'=>$IdUser);
		$result = $this->mongodb->where($Temp)->get('friend_relation');
		return $result;
	}
	public function InsertFriendRelation(){
		
	}
	public function UpdateFriendRelation(){
		
	}

}

/* End of file InteractiveDataFriendRelation.php */
/* Location: ./application/models/InteractiveDataFriendRelation.php */