<?php

//include('ShowDataTimeLine.php');
//$showdatatimeline = new ShowDataTimeLine();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Control extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('InteractiveDataProfile');
        $this->load->model('InteractiveDataPost');
//        $this->load->library('mongodb');
    }

    public function index($error = '') {
        if ($error) {
            $data['login_error'] = $error;
        } else {
            $data['login_error'] = '';
        }
        $data['title'] = 'Social Network | Connecteur';

        $this->load->view('LoginView', $data);
    }

    public function CheckInformation() {
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
                    // $data = $this->InteractiveDataPost->getNameAuthor();
                    

                    // foreach ($query_author->result() as $author) {
                    //     $data['author_name'] = $author->name;
                    // }
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
    public function CreateAccount(){
        $this->load->model('InteractiveDataHomeTown');
        $Data['hometown']=$this->InteractiveDataHomeTown-> GetHomeTown();
        $this->load->view('CreateAccountView',$Data);
    }

    public function CreateAccountOne(){
        $this->form_validation->set_rules('UserName', 'Username', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email'); // Email is requried
        $this->form_validation->set_rules('PassWord', 'Password', 'required|min_length[8]'); // Password required
        if ($this->form_validation->run() == FALSE) {
            $this->CreateAccount();
        } else {
            $Username = $this->input->post('UserName');
            $Email = $this->input->post('Email');
            $Password = $this->input->post('PassWord');
            $Year = $this->input->post('Year');
            $Month = $this->input->post('Month');
            $Day = $this->input->post('Day');
            $Birth = $Day . "/" . $Month . "/" . $Year;
            $HomeTown = $this->input->post('HomeTown');
            $HighSchool = $this->input->post('HighSchool');
            $University = $this->input->post('University');

            $query = $this->InteractiveDataProfile->GetProfileWithUser_CheckExist($Email);
            if ($query->num_rows() == 0) {
                $this->load->model('InteractiveDataProfile');
                $Data1['db']=$this->InteractiveDataProfile->GetProfileWithHomeTown($HomeTown);
                $query_insert = $this->InteractiveDataProfile->InsertProfile($Username, $Email, $Password, $Birth, $HomeTown, $HighSchool, $University);
                if ($query_insert) {
                     $error = 'Create account failed! Please try again!';
                    $this->index($error);
                   
                } else {
                     echo '<script language="javascript">';
                    echo 'alert("Create account successful")';
                    echo '</script>';
                    $this->load->view('FindFriendNewAccountView', $Data1);
                }
            } else {
                $error = 'The email has been used. Try to other email.';
                $this->index($error);
            }
        }
            

            
    }

    public function message(){
        $id='5a35e17dd7d69e7bfb31379e';
        $this->load->model('InteractiveDataStatus'); 
        $Data1['status']=$this->InteractiveDataStatus->GetStatus($id);
        echo '<pre>'; 
        $idone='1234399999999999';
        foreach ($Data1->result() as $value) {
            $idone=$value->id_author;
        }
        echo $idone;
        //var_dump($Data1);  
        //$this->load->view('MessageView', $Data);    
    }
    public function messageloadfriend(){

    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
