<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataPost extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetPost($IdUser){
		$this->load->library('mongodb');
		$Temp = array("id_user"=>"$IdUser");
		$Result = $this->mongodb->where($Temp)->get('post');
		return $Result;
	}
	public function InsertPostNonImage($IdUser,$IdAuthor,$Time,$Content,$Like_Yourself,$Like_Number){
		$this->load->library('mongodb');
		$Data=array('id_user'=>$IdUser,'id_author'=>$IdAuthor,'time'=>$Time,'content'=>$Content,'like_yourself'=>$Like_Yourself,'like_number'=>$Like_Number);
		$this->mongodb->insert('post',$Data);	

	}

	public function getNameAuthor($id_author) {
		$this->load->library('mongodb');
		$data = array("_id" => $id_author);
		var_dump($data);
		$result = $this->mongodb->where($data)->get('profile')->result();
		echo '<pre>';
		var_dump($result);
		return $result;
    	}
}

