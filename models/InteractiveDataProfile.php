<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class InteractiveDataProfile extends CI_Model {

    public $variable;

    public function __construct() {
        parent::__construct();
        $this->load->library('mongodb');
    }

    public function GetProfileWithOther($IdProfile) {
        $this->mongodb->select();
    }

    public function GetProfileWithUser($Email, $Password) {
        $this->load->library('mongodb');
        $data = array(
            "email" => $Email,
            "password" => $Password
        );
        $result = $this->mongodb->where($data)->get('profile');

        return $result;
    }

    public function GetProfileWithUser_CheckExist($Email) {
        $data = array(
            "email" => $Email
        );
        $result = $this->mongodb->where($data)->get('profile');
        return $result;
    }

    public function InsertProfile($name, $email, $password, $birth, $hometown, $highschool, $university) {
        $data = array(
            "name" => $name,
            "email" => $email,
            "password" => $password,
            "birth" => $birth,
            "hometown" => $hometown,
            "highschool" => $highschool,
            "university" => $university
        );
        $result = $this->mongodb->insert('profile', $data);
        return $result;
    }

    public function UdateProfile($IdProfile) {
        
    }

}

/* End of file InteractiveDataProfile.php */
/* Location: ./application/models/InteractiveDataProfile.php */
