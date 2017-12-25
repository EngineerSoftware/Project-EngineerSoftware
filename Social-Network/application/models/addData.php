<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongodb');
		
	}
	public function insert($Email,$PassWord,$UserName,$Birth,$HomeTown,$HighSchool,$University)
	{
		$data = array('email'=>$Email,'password'=>$PassWord,'name'=>$UserName,'birth'=>$HomeTown,'highschool'=>$HighSchool,'university'=>$University);
		$this->mongodb->insert('profile', $data);
		$last_id = $this->mongodb->insert_id();
		echo '$last_id';

		
	}

}

/* End of file addData.php */
/* Location: ./application/models/addData.php */
//,$PassWord,$Birth,$HomeTown,$HightSchool,$University
// ,'PassWord'=>$PassWord,'Birth'=>$Birth,'HomeTown'=>$HomeTown,'HightSchool'=>$HightSchool,'University' => $University