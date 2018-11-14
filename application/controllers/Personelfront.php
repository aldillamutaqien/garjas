<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personelfront extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }
	public function index()
	{
		if(_is_user_login($this)){
            $data = array();

            $id_user = _get_current_user_id($this);

            $this->load->model("personel_model");
            $data["users"] = $this->personel_model->get_personel_by_id_user($id_user);
            $this->load->view("personelfront/index",$data);
        }
    }
   
  
}