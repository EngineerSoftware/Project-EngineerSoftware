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
		$Result = $this->mongodb->where($Temp)->get('status');
		
		return $Result;
	}
	public function InsertStatus($IdUser,$IdAuthor,$Status){
		$this->load->library('mongodb');
		$Data = array('id_user'=>$IdUser,'id_author'=>$IdAuthor,'status'=>$Status);
		$Result=$this->mongodb->insert('status',$Data);
	}
	public function UpdateStatus($IdUser,$IdAuthor,$Status){
		$this->load->library('mongodb');
		$Data=array('id_user'=>$IdUser,'id_author'=>$IdAuthor,'status'=>$Status);
		$Temp=array('id_user'=>$IdUser);
		$this->mongodb->update('status',$Data,$Temp). " documents updated.";	
	}
}

