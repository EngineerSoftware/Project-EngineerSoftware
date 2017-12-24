<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataStatus extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetStatus($IdUser){
		$this->load->library('mongodb');
		$Temp = array('id_user'=>$IdUser);
		$Result = $this->mongodb->where($Temp)->get('status')->result();
		
		return $Result;
	}
	public function InsertStatus(){
		
	}
	public function UpdateStatus(){
		
	}
}

