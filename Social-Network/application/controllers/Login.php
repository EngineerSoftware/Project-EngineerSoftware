<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('InteractiveDataProfile');
        $this->load->library('mongodb');
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
                    $userdata = array(
                        'Email' => $email,
                        'id' => $id,
                        'is_logged_in' => true
                    );
                    $this->session->set_userdata($userdata);
                }
                echo $id;
                
                $this->load->view('TimelineView');
            } else {
                $query_checkemail = $this->InteractiveDataProfile->GetProfileWithUser_CheckExist($Email);
                if ($query_checkemail->num_rows() == 1){
                    $error = 'Incorrect password!';
                    
                } else {
                    $error = 'Account does not exist. Please create a new account!';
                }
                
                $this->index($error);
            }
        }
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */