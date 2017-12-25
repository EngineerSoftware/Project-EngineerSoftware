<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InteractiveDataProfile extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('mongodb');
		
	}
	public function GetProfileWithOther($IdProfile){
		$this->load->library('mongodb');
		$Temp=array('_id'=>$IdProfile);
		$Result=$this->mongodb->where($Temp)->get('profile');
		return $Result;
	}
	public function GetProfileWithUser($Email,$Password){
		$this->load->library('mongodb');
		$Temp = array('email'=>$Email,'password'=>$Password);
		$Result = $this->mongodb->where($Temp)->get('profile');
		return $Result;
	}
	public function GetProfileWithUser_CheckExist($Email) {
        $data = array(
            "email" => $Email
        );
        $result = $this->mongodb->where($data)->get('profile');
        return $result;
    }
	public function GetProfileWithHomeTown($HomeTown){
		$this->load->library('mongodb');
		$Temp = array('hometown'=>$HomeTown);
		$Result = $this->mongodb->where($Temp)->get('profile')->result();
		return $Result;
	}
	public function InsertProfile($name,$email,$password,$birth,$hometown,$highschool,$university){
		$data=array('email'=>$email,'password'=>$password,'name'=>$name,'birth' =>$birth,'hometown'=>$hometown ,'highschool'=>$highschool ,'university'=>$university );
		$Result=$this->mongodb->insert('profile',$data);
		
	}
	public function UdateProfile($IdProfile){
		
	}


}

/* End of file InteractiveDataProfile.php */
/* Location: ./application/models/InteractiveDataProfile.php */