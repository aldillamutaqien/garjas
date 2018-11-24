<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satker extends CI_Controller {
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

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);
            $data['datanilai_satker'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan($data['datapersonel']->kesatuan);
            $data["datapersonel_satker"] = @$this->personel_model->get_personel_by_satker($data['datapersonel']->kesatuan);

            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year($data['datapersonel']->kesatuan);


            $data["datalulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus($data['datapersonel']->kesatuan);
            $data["datatdklulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus($data['datapersonel']->kesatuan);


            $data["datalulus_diktuba"] = @$this->seldik_model->get_lulus_diktukba_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diktupa"] = @$this->seldik_model->get_lulus_diktukpa_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datams"] = @$this->seldik_model->get_ms_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datatms"] = @$this->seldik_model->get_tms_by_kesatuan_this_year($data['datapersonel']->kesatuan);


            
            $data['count_datams'] = count($data["datams"]);
            $data['count_datatms'] = count($data["datatms"]);


            $data['count_datalulus_diktuba'] = count($data["datalulus_diktuba"]);
            $data['count_datalulus_diktupa'] = count($data["datalulus_diktupa"]);
            $data['count_datalulus_diklapa1'] = count($data["datalulus_diklapa1"]);
            $data['count_datalulus_diklapa2'] = count($data["datalulus_diklapa2"]);

            $data['count_datalulus'] = count($data["datalulus"]);
            $data['count_datatdklulus'] = count($data["datatdklulus"]);
            $data['count_datadiktukba'] = count($data["datadiktukba"]);
            $data['count_datadiktukpa'] = count($data["datadiktukpa"]);
            $data['count_datadiklapa1'] = count($data["datadiklapa1"]);
            $data['count_datadiklapa2'] = count($data["datadiklapa2"]);
            $data['count_datapersonel_satker'] = count($data["datapersonel_satker"]);
            $data['count_datanilai_satker'] = count($data["datanilai_satker"]);


            $this->load->view("satker/dashboard",$data);
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
               
                $this->load->view("satker/change_password",$data);

        }
    }   
 
    

	
}
?>