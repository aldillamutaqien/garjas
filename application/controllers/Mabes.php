<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mabes extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }
    function dashboard(){
        if(_is_user_login($this)){
            $data = array();
            $this->load->view("mabes/dashboard",$data);
        }
    }

    function change_password(){
        if(_is_frontend_user_login($this)){
            $this->load->model("users_model");
                $user_data  = $this->users_model->get_user_by_id(_get_current_user_id($this));
                $data["user_data"] = $user_data;

            if($_POST){
                
                $this->load->model("users_model");
           
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('c_password', 'Current Password', 'trim|required');
                $this->form_validation->set_rules('n_password', 'New Password', 'trim|required');
                $this->form_validation->set_rules('r_password', 'Re Password', 'trim|required');
                
                if ($this->form_validation->run() == FALSE) {
                   
                    $error_array = $this->form_validation->error_string();
                    $error_json = json_encode(strip_tags($error_array));
                    $error_clean = str_replace(['"', '"'], '', $error_json);
                    $data["error"] =  "<script type='text/javascript'>
                                                    var teks = ' ".$error_clean."';
                                                    swal({   
                                                            title: '',   
                                                            text: teks,   
                                                            type: 'warning',   
                                                            showCancelButton: false,   
                                                            confirmButtonColor: '#DD6B55',   
                                                            confirmButtonText: 'OK', 
                                                            closeOnConfirm: false 
                                                        });
                                            </script>";
                }else {
                   
                    if($user_data->user_password == md5($this->input->post("c_password"))){
                     
                        $n_password = $this->input->post("n_password");
                        $r_password = $this->input->post("r_password");

                       
                        
                        if($n_password == $r_password){
                            $this->load->model("common_model");
                            $resid = $this->common_model->data_update("users",
                                array("user_password"=>md5($n_password)),array("user_id"=>_get_current_user_id($this)));
                           
                            echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/users/change_password";</script>
                                ';
                            $data["error"] = "<script type='text/javascript'>
                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
                                            </script>";
                        }
                        
                    }else{
                        $data["error"] = "<script type='text/javascript'>
                                                    swal({   
                                                            title: '',   
                                                            text: 'Password tidak cocok',   
                                                            type: 'warning',   
                                                            showCancelButton: false,   
                                                            confirmButtonColor: '#DD6B55',   
                                                            confirmButtonText: 'OK', 
                                                            closeOnConfirm: false 
                                                    });
                                         </script>";

                    }         
                        
                }
            }    
               
                $this->load->view("mabes/change_password",$data);

        }
    }   
 
    

	
}
?>