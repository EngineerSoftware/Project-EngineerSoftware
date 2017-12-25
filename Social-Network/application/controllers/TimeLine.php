<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TimeLine extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('InteractiveDataProfile');
        $this->load->library('mongodb');
	}
	
	public function index()
	{	
		
	        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email'); // Email is requried
	        $this->form_validation->set_rules('Password', 'Password', 'required'); // Password required
	        if ($this->form_validation->run() == FALSE) {
	            $this->index();
	        } else {
	            $Email = $this->input->post('Email');
	            $Password = $this->input->post('Password');
	            $query = $this->InteractiveDataProfile->GetProfileWithUser($Email, $Password);
	            if ($query->num_rows() == 1) {
	                foreach ($query->result() as $row) {
	                    $email = $row->email;
	                    $id = $row->_id;
	                    $name = $row->name;
	                    $userdata = array(
	                        'Email' => $email,
	                        'id' => $id,
	                        'is_logged_in' => true
	                    );
	                    $this->session->set_userdata($userdata);
	                }
	                $dataLogin['id'] = $id;
	                $dataLogin['name'] = $name;
	                $query_timeline = $this->InteractiveDataPost->getPost($id);
	                foreach ($query_timeline->result() as $post) {
	                    $_id = $post->_id;
	                    $id_user = $post->id_user;
	                    $id_author = $post->id_author;
	                    $time = $post->time;
	                    $content = $post->content;
	                    $like_yourself = $post->like_yourself;
	                    $like_number = $post->like_number;
	                    $dataLogin['_id'] = $_id;
	                    $dataLogin['id_user'] = $id_user;
	                    $dataLogin['id_author'] = $id_author;
	                    $dataLogin['time'] = $time;
	                    $dataLogin['content'] = $content;
	                    $dataLogin['like_yourself'] = $like_yourself;
	                    $dataLogin['like_number'] = $like_number;
	                    $query_author = $this->InteractiveDataPost->getNameAuthor($id_author);
	                    foreach ($query_author->result() as $author) {
	                        $data['author_name'] = $author->name;
	                    }
	                }
	                $this->load->view('TimelineView', $dataLogin);
	            } else {
	                $query_checkemail = $this->InteractiveDataProfile->GetProfileWithUser_CheckExist($Email);
	                if ($query_checkemail->num_rows() == 1) {
	                    $error = 'Incorrect password!';
	                } else {
	                    $error = 'Account does not exist. Please create a new account!';
	                }

	                $this->index($error);
	            }
	        }
	}
	
	public function InsertPost(){
		$this->load->model('InteractiveDataPost');
		
		$id='5a35e17dd7d69e7bfb31379e';
		$content= $this->input->post('ContentPost');;
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
		
	}
	


}

/* End of file ShowDataTimeLine.php */
/* Location: ./application/controllers/ShowDataTimeLine.php */