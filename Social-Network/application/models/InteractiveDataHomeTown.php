<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InteractiveDataHomeTown extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetHomeTown(){
		$this->load->library('mongodb');
		$result=$this->mongodb->get('hometown')->result();
		return $result;
	}

}

/* End of file InteractiveDataHomeTown.php */
/* Location: ./application/models/InteractiveDataHomeTown.php */