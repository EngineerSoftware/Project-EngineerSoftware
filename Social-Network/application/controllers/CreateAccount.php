<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CreateAccount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('InteractiveDataHomeTown');
		$Data['hometown']=$this->InteractiveDataHomeTown-> GetHomeTown();
		$this->load->view('CreateAccountView',$Data);
	}
	public function CreateAccountOne(){
		$this->form_validation->set_rules('UserName', 'Username', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_email'); // Email is requried
        $this->form_validation->set_rules('PassWord', 'Password', 'required|min_length[8]'); // Password required
        if ($this->form_validation->run() == FALSE) {
            $this->index();
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
                $query_insert = $this->InteractiveDataProfile->InsertProfile($Username, $Email, $Password, $Birth, $HomeTown, $HighSchool, $University);
                if ($query_insert) {
                    echo '<script language="javascript">';
                    echo 'alert("Create account successful")';
                    echo '</script>';
                } else {
                    $error = 'Create account failed! Please try again!';
                    $this->index($error);
                }
            } else {
                $error = 'The email has been used. Try to other email.';
                $this->index($error);
            }
        }
			

			
	}

}

/* End of file CreateAccount.php */
/* Location: ./application/controllers/CreateAccount.php */