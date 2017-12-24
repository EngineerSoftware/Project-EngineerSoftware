<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowDataTimeLine extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('TimeLine');
	}
	public function InsertPost(){
		$this->load->model('InteractiveDataPost');
		
		$id='5a35e17dd7d69e7bfb31379e';
		$content= $this->input->post('UserName');;
		$Like_Yourself = 0;
		$Like_Number = 0 ;
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$currentDateTime = date('Y-m-d H:i:s');
		$this->InteractiveDataPost->InsertPostNonImage($id,$id,$currentDateTime,$content,$Like_Yourself,$Like_Number);
		$this->load->model('InteractiveDataFriendRelation');
		$Data=$this->InteractiveDataFriendRelation-> GetFriendRelation($id);
		foreach ($Data->result() as $value) {
			$iduser=$value->id2;
			$this->InteractiveDataPost->InsertPostNonImage($iduser,$id,$currentDateTime,$content,$Like_Yourself,$Like_Number);
		}
		this.index();

}

/* End of file ShowDataTimeLine.php */
/* Location: ./application/controllers/ShowDataTimeLine.php */
