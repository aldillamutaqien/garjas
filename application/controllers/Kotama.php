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
            $this->load->model('satker_model');
            $user_id = _get_current_user_id($this);           
            $data = array();
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data['seldik']= @$this->seldik_model->get_seldik()->result();
            $data['datanilai_kotama'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kotama($data['kotama']->nama_kotama);
            $data["datapersonel_kotama"] = @$this->personel_model->get_personel_by_kotama($data['kotama']->nama_kotama);
            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["satker"]       = @$this->satker_model->get_satker_by_kotama($data['kotama']->nama_kotama);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $data["lulus_diktukba"] = @$this->seldik_model->get_lulus_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diktukpa"] = @$this->seldik_model->get_lulus_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datams"] = @$this->seldik_model->get_ms_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datatms"] = @$this->seldik_model->get_tms_by_kotama_this_year($data['kotama']->nama_kotama);
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
             $data['count_datams'] = count($data["datams"]);
             $data['count_datatms'] = count($data["datatms"]);
            //print_r($data['count_datapersonel_kotama']);die();
           
            $this->load->view("kotama/dashboard",$data);
        }
    }

    function nilai_satker($kesatuan){
         if(_is_user_login($this)){
            $data = array();
            $this->load->model('kotama_model');
            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model"); 
            $this->load->model('satker_model');

            $user_id = _get_current_user_id($this); 
            $data['kesatuan'] = urldecode($kesatuan);
            $data['kotama']=@$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $data['datanilai_satker'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan(urldecode($kesatuan));
            $data["datapersonel_satker"] = @$this->personel_model->get_personel_by_satker(urldecode($kesatuan)); 

            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year(urldecode($kesatuan));
            //print_r(urldecode($kesatuan).'<->'.$data["datadiktukba"]);die();
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year(urldecode($kesatuan));
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year(urldecode($kesatuan));
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year(urldecode($kesatuan));


            $data["datalulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus(urldecode($kesatuan));
            $data["datatdklulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus(urldecode($kesatuan));


            $data["datalulus_diktuba"] = @$this->seldik_model->get_lulus_diktukba_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diktupa"] = @$this->seldik_model->get_lulus_diktukpa_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datams"] = @$this->seldik_model->get_ms_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datatms"] = @$this->seldik_model->get_tms_by_kesatuan_this_year(urldecode($kesatuan));


            
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


            $this->load->view("kotama/nilai_satker",$data);
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