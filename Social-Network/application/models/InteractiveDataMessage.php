<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataMessage extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetMessage($id1,$id2){
		$this->load->library('mongodb');
		$Temp=array('id_user1'=>$id1,'id_user2'=>$id2);
		$Result=$this->mongodb->where($Temp)->get('message')->result();
		return $Result
	}
	public function InsertMessage(){
		
	}
	public function UpdateMessage(){
		
	}

}

/* End of file InteractiveDataMessage.php */
/* Location: ./application/models/InteractiveDataMessage.php */