<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotama extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }
    function dashboard(){
        if(_is_user_login($this)){
            $this->load->model('kotama_model');
            $this->load->model("personel_model");
            $this->load->model('datanilai_model');
            $this->load->model('seldik_model');
            $user_id = _get_current_user_id($this);           
            $data = array();
            $data['kotama']=$this->kotama_model->get_kotama_by_id_user($user_id);
            $data['seldik']=$this->seldik_model->get_seldik()->result();
            $data['datanilai_kotama'] = $this->datanilai_model->get_datanilai_filter_by_flag_del_and_kotama($data['kotama']->nama_kotama);
            $data["datapersonel_kotama"] = $this->personel_model->get_personel_by_kotama($data['kotama']->nama_kotama);
            $data["datadiktukba"] = $this->seldik_model->get_personel_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiktukpa"] = $this->seldik_model->get_personel_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa1"] = $this->seldik_model->get_personel_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa2"] = $this->seldik_model->get_personel_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
            

            $data["lulus_diktukba"] = $this->seldik_model->get_lulus_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diktukpa"] = $this->seldik_model->get_lulus_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa1"] = $this->seldik_model->get_lulus_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa2"] = $this->seldik_model->get_lulus_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
           //print_r(count($data["lulus_diktukba"]));


            $data['count_datanilai_kotama'] = count($data["datanilai_kotama"]);
            $data['count_datapersonel_kotama'] = count($data["datapersonel_kotama"]);
            $data['count_datadiktukba'] = count($data["datadiktukba"]);
            $data['count_datadiktukpa'] = count($data["datadiktukpa"]);
            $data['count_datadiklapa1'] = count($data["datadiklapa1"]);
            $data['count_datadiklapa2'] = count($data["datadiklapa2"]);


             $data['count_lulus_diktukba'] = count($data["lulus_diktukba"]);
             $data['count_lulus_diktukpa'] = count($data["lulus_diktukpa"]);
             $data['count_lulus_diklapa1'] = count($data["lulus_diklapa1"]);
             $data['count_lulus_diklapa2'] = count($data["lulus_diklapa2"]);
            //print_r($data['count_datapersonel_kotama']);die();
           
            $this->load->view("kotama/dashboard",$data);
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
               
                $this->load->view("kotama/change_password",$data);

        }
    }   
 
    

	
}
?>